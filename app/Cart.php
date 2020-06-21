<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function total()
    {
        //ambil nilai
        $total=0;
        foreach($this->books as $book){
            $total = $total + $book->pivot->jumlah;
        }
        return $total;
    }
}
