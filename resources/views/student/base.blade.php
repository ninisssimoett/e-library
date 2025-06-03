<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('mycss/student.css')}}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
        

        


    <link rel="shortcut icon" href="{{ asset('purple/assets/coba.svg')}}">

</head>
<body>

    <!-- Header Navbar -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark container">
        <!-- Logo -->
        <div class="d-flex align-items-center me-3">
          <h3 class="fw-bold fs-2 m-0" style="color: #0163AB;">NeoRead</h3>
        </div>
    
        <!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav gap-2">
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('student.dashboard') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('student.all.book') }}">Semua Buku</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('student.borrow.all') }}">Pinjamanku</a></li>
            
            <li class="nav-item">
              <a class="btn btn-orange text-white" href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            
          </ul>
        </div>
      </nav>
    </header>
    
      

    @yield('content')

    <footer class="text-white py-5" style="background-color: #0163AB">
      <div class="container">
        <div class="row gy-4">
          <div class="col-md-3">
            <h5 class="fw-bold">NeoRead</h5>
            <p class="small" style="color: #d1d5db;">
              Platform baca digital modern untuk pelajar dan masyarakat umum.  
              Baca di mana saja, kapan saja.
            </p>
            <div class="d-flex gap-3 fs-5">
              <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
    
          <div class="col-md-3">
            <h6 class="fw-semibold">Eksplor</h6>
            <ul class="list-unstyled small">
              <li><a href="#" class="text-decoration-none" style="color: #d1d5db;">Katalog Buku</a></li>
              <li><a href="#" class="text-decoration-none" style="color: #d1d5db;">Kategori</a></li>
              <li><a href="#" class="text-decoration-none" style="color: #d1d5db;">Favorit</a></li>
              <li><a href="#" class="text-decoration-none" style="color: #d1d5db;">Terbaru</a></li>
            </ul>
          </div>
    
          <div class="col-md-3">
            <h6 class="fw-semibold">Bantuan</h6>
            <ul class="list-unstyled small">
              <li><a href="#" class="text-decoration-none" style="color: #d1d5db;">Pusat Bantuan</a></li>
              <li><a href="#" class="text-decoration-none" style="color: #d1d5db;">Syarat & Ketentuan</a></li>
              <li><a href="#" class="text-decoration-none" style="color: #d1d5db;">Kebijakan Privasi</a></li>
              <li><a href="#" class="text-decoration-none" style="color: #d1d5db;">Laporkan Masalah</a></li>
            </ul>
          </div>
    
          <div class="col-md-3">
            <h6 class="fw-semibold">Kontak</h6>
            <ul class="list-unstyled small" style="color: #d1d5db;">
              <li>Email: support@neoread.id</li>
              <li>Telp: (021) 1234-5678</li>
              <li>Alamat: Jl. Literasi No. 45, Bogor</li>
            </ul>
          </div>
        </div>
    
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 pt-3 text-white-50 small" style="border-top: 1px solid black;">
          <p class="mb-1">&copy; 2025 NeoRead. All rights reserved.</p>
          <div>
            <a href="#" class="text-decoration-none me-3" style="color: #d1d5db;">Tentang</a>
            <a href="#" class="text-decoration-none me-3" style="color: #d1d5db;">Karier</a>
            <a href="#" class="text-decoration-none" style="color: #d1d5db;">Blog</a>
          </div>
        </div>
      </div>
    </footer>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




