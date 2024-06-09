<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="{{ asset('assets/SOUL1.png') }}" />
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@yield('title')</title>
</head>

<body>
  @include('partials.sidebar')
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
      </div>
      <div class="profile-details">
        <span class="admin_name">Soul Admin</span>
      </div>
    </nav>

    <div class="home-content">
      @yield('content')
        <h2>SELAMAT DATANG ADMIN</h2>
        <h3>Awaken Your Artistic Soul</h3>
        <h4>Bersiaplah Untuk Memulai Perjalanan Seni Anda dan Temukan Kedalaman Kreativitas Dalam Diri</h4>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
			let sidebarBtn = document.querySelector(".sidebarBtn");
			sidebarBtn.onclick = function () {
				sidebar.classList.toggle("active");
				if (sidebar.classList.contains("active")) {
					sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
				} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
  </script>
</body>

</html>

