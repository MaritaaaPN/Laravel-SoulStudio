<div class="sidebar">
		<div class="logo-details">
		<i class='bx bxs-spray-can'></i>
			<span class="logo_name">Soul Studio</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="#" class="active">
				<i class='bx bxs-dashboard' ></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
            <a href="/artist" class="{{ request()->Is('artist*') ? 'active' : '' }}">
				<i class='bx bxs-user-rectangle'></i>
					<span class="links_name">Artist</span>
				</a>
			</li>
			<li>
            <a href="/artwork" class="{{ request()->Is('artwork*') ? 'active' : '' }}">
				<i class='bx bxs-palette'></i>
					<span class="links_name">Artworks</span>
				</a>
			</li>
			<li>
            <a href="/exhibition" class="{{ request()->Is('exhibition*') ? 'active' : '' }}">
				<i class='bx bxs-store-alt'></i>
					<span class="links_name">Exhibition</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="bx bx-log-out"></i>
					<span class="links_name">Log out</span>
				</a>
			</li>
		</ul>
	</div>