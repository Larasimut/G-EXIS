<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- ICON BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
  * {
    font-family: 'Poppins', sans-serif;
  }

  /* NAVBAR */
  .navbar-custom {
    background: #e6f2ff;
    border-radius: 40px;
    margin: 15px auto;
    width: 90%;
    padding: 14px 28px;
  }

 .nav-link {
  font-family: 'Poppins', sans-serif !important;
  font-weight: 400;
  font-size: 18px;
  color: #444 !important;
  transition: 0.25s ease-in-out;
  display: inline-block;
}

.nav-link:hover {
  color: #0d6efd !important;
  transform: translateY(-2px);
}

.nav-link.active {
  font-weight: 600;
  color: #0d6efd !important;
  border-bottom: 3px solid #0d6efd;
  padding-bottom: 4px;
}


  /* SEARCH BOX */
  .search-box {
    position: relative;
  }
  .search-box input {
    width: 260px;
    border-radius: 30px;
    padding-left: 45px;
    border: none;
    background: white;
    height: 42px;
    font-size: 15px;
  }
  .search-box i {
    position: absolute;
    top: 50%;
    left: 14px;
    transform: translateY(-50%);
    color: #1273c5;
    font-size: 19px;
  }

  .profile-icon {
    font-size: 32px;
    color: #1273c5;
    cursor: pointer;
  }

  /* SIDEBAR */
  .profile-sidebar {
    position: fixed;
    top: 0;
    right: -330px;
    width: 330px;
    height: 100vh;
    background: #4A76A8;
    padding: 40px 30px;
    border-top-left-radius: 40px;
    border-bottom-left-radius: 40px;
    transition: right 0.45s cubic-bezier(0.22, 0.61, 0.36, 1);
    color: white;
    z-index: 9999;
  }
  .profile-sidebar.active {
    right: 0;
  }

  .profile-sidebar .profile-picture {
    font-size: 100px;
    color: white;
    margin-bottom: 10px;
  }

  .menu-item {
    display: flex;
    align-items: center;
    background: rgba(255,255,255,0.15);
    padding: 12px 16px;
    border-radius: 15px;
    margin: 10px 0;
    font-size: 17px;
    font-weight: 500;
    cursor: pointer;
  }
  .menu-item i {
    font-size: 22px;
    margin-right: 12px;
  }

  .logout-btn {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #d9534f;
    padding: 12px 16px;
    border-radius: 15px;
    margin-top: 25px;
    font-size: 17px;
    font-weight: 600;
    color: white;
    text-decoration: none;
    width: 100%;
    justify-content: center;
    border: none;
    transition: 0.25s;
    cursor: pointer;
  }
  .logout-btn:hover {
    background: #c9302c;
  }
</style>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
  <a class="navbar-brand fw-bold fs-4 text-primary d-flex align-items-center gap-2" href="#">
    <img src="{{ asset('images/logoge.png') }}" alt="Logo"
      style="width: 40px; height: 40px; border-radius: 50%;">
    <span style="font-family: 'Kaushan Script', cursive; font-size: 20px; color:#0d6efd;">
      - EXIS
    </span>
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navMenu">
    <ul class="navbar-nav mx-auto gap-3">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('siswa/beranda') ? 'active' : '' }}" href="{{ route('siswa.beranda') }}">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('siswa/ekstrakulikuler') ? 'active' : '' }}" href="{{ route('siswa.ekstrakulikuler') }}">Ekstrakurikuler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('siswa/kontak') ? 'active' : '' }}" href="{{ route('siswa.kontak') }}">Kontak</a>
      </li>
    </ul>

    <div class="d-flex align-items-center gap-3">
      <div class="search-box">
        <input type="text" class="form-control" placeholder="Cari sesuatu...">
        <i class="bi bi-search"></i>
      </div>
      <i class="bi bi-person-circle profile-icon" id="profileBtn"></i>
    </div>
  </div>
</nav>

<!-- OVERLAY -->
<div id="overlaySidebar"
     style="position:fixed; top:0; left:0; width:100%; height:100vh;
     background:rgba(0,0,0,0.45); display:none; z-index:9998;"></div>

<!-- SIDEBAR -->
<div class="profile-sidebar" id="sidebarProfile">

  <i class="bi bi-x-lg" id="closeSidebar"
    style="position:absolute; top:25px; right:25px; font-size:24px; cursor:pointer; color:white;"></i>

  <center>
    <i class="bi bi-person-circle profile-picture"></i>
    <h5 class="fw-bold mb-4">Siswa - {{ Auth::user()->name }}</h5>
  </center>

  <a href="{{ route('siswa.tambahEkskul') }}" class="menu-item text-white text-decoration-none">
    <i class="bi bi-plus-circle"></i> Tambah Ekskul
  </a>

  <a href="{{ route('siswa.ekskulTerdaftar') }}" class="menu-item text-white text-decoration-none">
    <i class="bi bi-people"></i> Ekskul Terdaftar
  </a>

  <a href="{{ route('siswa.notifikasi') }}" class="menu-item text-white text-decoration-none">
    <i class="bi bi-bell"></i> Notifikasi
  </a>

  <a href="{{ route('logout.confirm') }}" class="logout-btn">LOG OUT</a>

</div>

<script>
  const sidebar = document.getElementById("sidebarProfile");
  const profileBtn = document.getElementById("profileBtn");
  const closeSidebar = document.getElementById("closeSidebar");
  const overlay = document.getElementById("overlaySidebar");

  profileBtn.onclick = () => {
    sidebar.classList.add("active");
    overlay.style.display = "block";
  };

  closeSidebar.onclick = () => {
    sidebar.classList.remove("active");
    overlay.style.display = "none";
  };

  overlay.onclick = () => {
    sidebar.classList.remove("active");
    overlay.style.display = "none";
  };
</script>
