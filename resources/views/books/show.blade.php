@extends('layout/main')

@section('title', 'Sinopsis')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Rincian Produk</h3>
						@if (session('status'))
                        <div class="label label-success btn-toastr" data-position="bottom-center">
                        {{ session('status') }}
                        </div>
                        @endif
					</div>
					<div class="panel-body">
                        <div class="custom-tabs-line tabs-line-bottom left-aligned">
							<ul class="nav" role="tablist">
								<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Sinopsis</a></li>
								<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Rincian<span class="badge"></span></a></li>
							</ul>
						</div>
                        <div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
										<div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                        <div class="col-md-4">
                                        <img src="/images/ctt.jpg" width="180" height="240" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Critical Thinking Toolkit adalah ringkasan komprehensif yang membekali pembaca dengan pengetahuan dan metode penting untuk pemikiran dan kritik yang jelas, analitis, logis dan kritik dalam berbagai konteks ilmiah dan situasi sehari-hari.</p>
                                            <p class="card-text">Mengambil pendekatan ekspansif untuk berpikir kritis dengan mengeksplorasi konsep-konsep dari disiplin lain, termasuk bukti dan pembenaran dari filsafat, bias kognitif dan kesalahan dari psikologi, ras dan gender dari sosiologi dan ilmu politik, dan kiasan dan simbol dari retorika Ikuti format terbukti dari The Philosopher's.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
									</div>
									<div class="tab-pane fade" id="tab-bottom-left2">
										<div class="table-responsive">
											<table class="table project-table">
												<thead>
													<tr>
														<th>Kategori</th>
														<th>Keterangan</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Judul</td>
														<td>The Critical Thinking Toolkit</td>
													</tr>
													<tr>
														<td>ISBN</td>
														<td>978-0-470-65869-7</td>
													</tr>
													<tr>
														<td>Kategori</td>
														<td>Philosophical Logic</td>
													</tr>
													<tr>
														<td>Penulis</td>
														<td>Galen A. Foresman, Peter S. Fosl, Jamie C. Watson</td>
													</tr>
													<tr>
														<td>Penerbit</td>
														<td>Wiley Blackwell</td>
													</tr>
													<tr>
														<td>Tahun Terbit</td>
														<td>2016</td>
													</tr>
													<tr>
														<td>Harga</td>
														<td>Rp 30.000,00</td>
													</tr>
													<tr>
														<td>Tebal</td>
														<td>384 halaman</td>
													</tr>
												</tbody>
											</table>
                                            <div class="container">
                                                <button type="button" class="btn btn-primary float-right my-3" data-toggle="modal" data-target="#exampleModal">Tambahkan ke Keranjang Belanja</button>
                                            </div>
										</div>
									</div>
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
                <form method="get" action="/bookshelf/{{ $book->id }}">
                    <p>Produk Berhasil Ditambahkan ke dalam Keranjang Belanja Anda!</p>
                    <button position="center" type="submit" class="btn btn-primary">OK</button>
                    </div>
                </form>
                   
            </div>
        </div>
    </div>
</div>
@stop
