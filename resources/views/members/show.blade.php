@extends('layout/main')

@section('title', 'Detail Anggota')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{ $member->getAvatar() }}" width="90px" height="90px" class="img-circle" alt="Avatar">
										<h3 class="name">{{ $member->nama }}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												3 <span>Bacaan</span>
											</div>
											<div class="col-md-4 stat-item">
												5 <span>Wishlist</span>
											</div>
											<div class="col-md-4 stat-item">
												25 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Email <span>{{ $member->email }}</span></li>
											<li>Mobile <span>{{ $member->kontak }}</span></li>
											<li>Address <span>{{ $member->alamat }}</span></li>
										</ul>
									</div>

								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading">{{ $member->nama }}'s Books</h4>
								<!-- AWARDS -->
								<div class="awards">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<a href="/members"><img src="/images/ctt.jpg" width="120px" height="120px" class="btn btn-img-square" alt="awards"></img></a>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<a href="/members"><img src="/images/nebula.jpg" width="120px" height="120px" class="btn btn-img-square" alt="awards"></img></a>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<a href="/members"><img src="/images/ssubba.jpg" width="120px" height="120px" class="btn btn-img-square" alt="awards"></img></a>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<a href="/members"><img src="/images/sby.jpg" width="120px" height="120px" class="btn btn-img-square" alt="awards"></img></a>
											</div>
										</div>
								
						
								
									<div class="profile-info">
										<h4 class="heading">Social</h4>
										<ul class="list-inline social-icons">
											<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">About</h4>
										<p>I like writing</p>
									</div>
									<div class="text-center"><a href="/members/{{ $member->id }}/edit" class="btn btn-primary">Edit Profile</a></div>
                                    <div class="text-center"><a href="{{ $member->id }}" method="post"></a>
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                    <div class="text-center"><a href="/members" class="btn btn-dark">Back</a></div>
									</div>
								</div>
								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change My Avatar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/members/{{ $member->id }}">
				@method('patch')
					 @csrf
					 <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" class="form-control" id="avatar" placeholder="Tambahkan Foto Profil" name="avatar" value="{{ $member->avatar }}">
                    </div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                   
            </div>
        </div>
    </div>
</div>
@stop

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-5">
            <h1 class="mt=3 d-inline">Detail Anggota</h1>				
                    <div class="well">
                                    
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $member->email }}</h6>
                        <p class="card-text">{{ $member->alamat }}</p>
                        <p class="card-text">{{ $member->kontak }}</p>
                        <a href="{{ $member->id }}/edit" class="btn btn-primary">Edit</a>                        
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
   
