<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/about" class=""><i class="lnr lnr-user"></i> <span>About</span></a></li>
						@if(auth()->user()->role == 'admin')
						<li><a href="/members" class=""><i class="lnr lnr-user"></i> <span>Members</span></a></li>
						@endif
					</ul>
				</nav>
			</div>
		</div>