<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;
use App\Member;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $members = Member::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        }else(
            $members = Member::all()
        );
        
        return view('members.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $member = new Member;
        // $member->nama = $request->nama;
        // $member->email = $request->email;
        // $member->alamat = $request->alamat;
        // $member->kontak = $request->kontak;
 
        // $member->save();
        // return redirect('/members');

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kontak' => 'required'
        ]);

        //insert ke tabel users
        $user = new \App\User;
        $user->role = 'member';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('apayaaaa');
        $user->remember_token;
        $user->save();

        //insert ke tabel members
        $request->request->add([ 'user_id' => $user->id ]);
        $member = Member::create($request->all());
        return redirect('/members')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kontak' => 'required'
        ]);

        // dd($request->all());
        
        Member::where('id', $member->id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'kontak' => $request->kontak,
                'avatar' => $request->avatar,
            ]);
        

        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $member->avatar = $request->file('avatar')->getClientOriginalName();
            $member->save();
        }
        return redirect('/members')->with('status', 'Data Berhasil Disimpan!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        Member::destroy($member->id);
        return redirect('/members')->with('status', 'Data Berhasil Dihapus!');
    }
    
}
