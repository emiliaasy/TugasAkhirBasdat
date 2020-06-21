@extends('layout/main')

@section('title', 'Daftar Anggota')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                  <div class="panel">
								    <div class="panel-heading">
                      <h3 class="panel-title" data-position="top-center">Keranjang Belanja Anda</h3>
                    </div>
                    <div class="panel-body">
									    <table class="table table-striped">
										    <tbody>
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Produk</th>
                              <th scope="col">Jumlah</th>
                              <th scope="col">Harga</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>The Critical Thinking Tool Kit</th>
                              <td>1</td>
                              <td>Rp 80000,00</td>
                            </tr>
                            <th scope="col">Total</th>
                            <td>Rp 80.000,00</td>
										      </tbody>
                        </tbody>
									    </table>
                      <table class="table table-hover">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck1"></input>
                              <label class="custom-control-label" for="customCheck1">Data yang diisi sudah benar</label>
                        </div>
                        <div class="container">
                          <button type="button" class="btn btn-primary float-right my-3" data-toggle="modal" data-target="#exampleModal">Checkout</button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pemesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="get" action="/about">
                     @csrf
                    <div class="form-group">
						          <label for="select">Metode Pembayaran</label>
                      <p>Harap melakukan transfer ke rekening berikut</p>
                      <p>072836253928323372 (BNI)</p>
                      <p> a.n. manusia
                      <div class="form-group">
                        <label for="transfer">Upload Bukti Pembayaran</label>
                        <input type="file" class="form-control" id="transfer" placeholder="Upload bukti pembayaran name="transfer">
                      </div>
                      <p>Buku digital akan dikirimkan melalui e-mail sesaat setelah mengirimkan bukti pembayaran.</p>
                      <p class="head">Terima kasih!</p>
                    </div>

                    <div class="modal-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                   
            </div>
        </div>
    </div>
</div>
@stop