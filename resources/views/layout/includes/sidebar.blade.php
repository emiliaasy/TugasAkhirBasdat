<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/" class="active"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/about" class=""><i class="fa fa-user"></i> <span>About</span></a></li>
						@if(auth()->user()->role == 'admin')
						<li><a href="/members" class=""><i class="fa fa-users"></i> <span>Members</span></a></li>
						<li><a href="/bookshelf" class=""><i class="fa fa-book"></i> <span>Bookshelf</span></a></li>
						<li><a href="/cart" class=""><i class="fa fa-shopping-bag"></i> <span>Cart</span></a></li>
						@endif
					</ul>
				</nav>
			</div>
		</div>