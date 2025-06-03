<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

   <!-- Bootstrap Bundle JS (termasuk Popper) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    {{-- css bikin sendiri --}}
    <link rel="stylesheet" href="{{ asset('mycss/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 100px 0;
        }


        .section-title {
            font-weight: bold;
            color: #5a189a;
        }


        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }


        .category-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 1rem;
        }


        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(128, 0, 128, 0.2);
        }


        .text-purple {
            color: #6f42c1;
        }


        .bg-purple {
            background-color: #6f42c1;
            color: #fff;
        }
    </style>
</head>


<body>


    <header class="bg-white sticky-top">
        <div class="container py-3 d-flex justify-content-between align-items-center">
          <h3 class="fw-bold fs-2 m-0" style="color: #0163AB;">NeoRead</h3>
      
         
          <nav class="d-flex align-items-center ms-5">
            <a href="#books" class="mx-2 px-3 text-dark small">Buku Terbaru</a>
            <a href="#categories" class="mx-2 px-3 text-dark small">Kategori</a>
            <a href="#testimonials" class="mx-2 px-3 text-dark small">Testimoni</a>
      
            <a href="{{ route('login') }}" class="btn text-white rounded px-3 py-1 ms-2 small" style="background-color: #0163AB;">Login</a>
      
          </nav>
        </div>
      </header>
      


    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6 flex flex-col-reverse md:flex-row items-center justify-between">
          
            <div class="w-full md:w-1/2 text-left -pl-3">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6 mt-5 leading-tight">
              Find the book you're looking for<br />
              <span class="block" style="color: #0163AB;">easier to read.</span>
            </h1>
          
            <p class="text-gray-600 text-base md:text-md mb-4 -mt-3">
                Belajar jadi makin seru dengan NeoRead. Akses cepat, koleksi lengkap, semuanya digital!
              </p>
              
          </div>
          
      
          <div class="w-full md:w-1/2 mb-12 md:mb-0">
            <img src="{{ asset('purple/assets/mks.svg') }}" alt="Buku E-Library" class="max-w-xs mx-auto"/>

          
        </div>
        </div>
      </section>
      
      


    <section id="features" class="py-5">
        <div class="container text-center">
            <h2 class="section-title mb-4 font-bold" style="color: #000000; font-weight: 700 !important; font-size: 23px;">
                Kenapa Pilih E-Library IDN?
              </h2>
              
              
              <div class="flex flex-col md:flex-row justify-center gap-6 mt-10">
                <div class="bg-blue-50 rounded-2xl p-6 text-center flex-1 transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                  <div class="text-blue-500 text-3xl mb-4">
                    <i class="fas fa-book-open"></i>
                  </div>
                  <h5 class="font-semibold text-lg mb-2">Koleksi Lengkap</h5>
                  <p class="text-gray-600 text-sm">
                    Buku pelajaran, fiksi, agama, teknologi, dan masih banyak lagi.
                  </p>
                </div>
                <div class="bg-blue-50 rounded-2xl p-6 text-center flex-1 transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                  <div class="text-yellow-500 text-3xl mb-4">
                    <i class="fas fa-mobile-alt"></i>
                  </div>
                  <h5 class="font-semibold text-lg mb-2">Akses Mudah</h5>
                  <p class="text-gray-600 text-sm">
                    Buka perpustakaan dari perangkat manapun, kapanpun.
                  </p>
                </div>
                <div class="bg-blue-50 rounded-2xl p-6 text-center flex-1 transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                  <div class="text-red-500 text-3xl mb-4">
                    <i class="fas fa-users"></i>
                  </div>
                  <h5 class="font-semibold text-lg mb-2">Untuk Semua</h5>
                  <p class="text-gray-600 text-sm">
                    Siswa dan guru bisa mengakses sesuai kebutuhan masing-masing.
                  </p>
                </div>
              </div>
        </div>
    </section>


    <section id="books" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-4 font-bold" style="color: #000000; font-weight: 700 !important; font-size: 23px;">
                Buku Terbaru
            </h2>
            <div class="row">
                @foreach($books->take(4) as $book)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="{{ asset($book->cover) }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ Str::limit($book->description, 100) }}</p>
    
                            {{-- Badge kategori --}}
                            <span class="badge" style="background-color: #0163AB">{{ $book->category->name }}</span>
    
                            {{-- Rating bintang --}}
                            <div class="mt-2">
                                @for ($i = 0; $i < 5; $i++)
                                    @if($i < $book->rating)
                                        <i class="fas fa-star text-warning"></i>
                                    @else
                                        <i class="far fa-star text-warning"></i>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-3">
                <a
                    href="{{ route('book') }}"
                    class="section-title text-center mb-4 font-bold transition-shadow duration-300 hover:shadow-md px-3 py-1 inline-block"
                    style="color: #000000; font-weight: 700 !important; font-size: 23px;">
                    Lihat Semua Buku
                </a>
            </div>
        </div>
    </section>
    
    <section id="categories" class="py-5 bg-white">
        <div class="container">
            <h2 class="section-title text-center mb-5 font-bold" style="color: #000000; font-weight: 700 !important; font-size: 23px;">
                Kategori Buku
            </h2>
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 transition-all" style="border-radius: 1rem; transition: transform 0.3s;">
                        <div class="card-body d-flex flex-column align-items-center">
                            {{-- Icon --}}
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="bi bi-bookmarks-fill fs-2" style="color: #0163AB;"></i>
                            </div>
                            {{-- Nama Kategori --}}
                            <h6 class="card-title text-dark fw-semibold" style="font-size: 16px;">{{ $category->name }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    


    <section id="testimonials" class="py-10 bg-gray-100">
        <div class="container mx-auto flex justify-center">
          <div class="relative w-full max-w-md perspective">
         <!-- Left Arrow -->
<button onclick="prevTestimonial()" class="absolute left-0 top-1/2 -translate-x-10 -translate-y-1/2 z-10">
    ‹
  </button>
      
            <!-- Testimonial Cards -->
            <div class="relative h-80">
                <!-- Card 1 -->
                <div class="testimonial-card absolute inset-0 bg-white rounded-xl shadow-md px-6 py-4 flex flex-col items-center text-center justify-center gap-4 transition-transform duration-700 transform rotate-y-0 opacity-100" data-index="0">
                  <img src="https://i.pravatar.cc/100?img=1" class="w-16 h-16 rounded-full" />
                  <p class="text-base font-medium">"NeoRead benar-benar memudahkan saya dalam mencari referensi belajar. Koleksinya lengkap dan aksesnya cepat!"</p>
                  <footer class="text-sm text-gray-500">Daren, CEO</footer>
                </div>
                <!-- Card 2 -->
                <div class="testimonial-card absolute inset-0 bg-white rounded-xl shadow-md px-6 py-4 flex flex-col items-center text-center justify-center gap-4 transition-transform duration-700 transform rotate-y-180 opacity-0" data-index="1">
                  <img src="https://i.pravatar.cc/100?img=2" class="w-16 h-16 rounded-full" />
                  <p class="text-base font-medium">"Sejak pakai NeoRead, kegiatan membaca jadi lebih menyenangkan. Tampilan simpel, tapi fiturnya kaya!"</p>
                  <footer class="text-sm text-gray-500">Grock, Owner</footer>
                </div>
                <!-- Card 3 -->
                <div class="testimonial-card absolute inset-0 bg-white rounded-xl shadow-md px-6 py-4 flex flex-col items-center text-center justify-center gap-4 transition-transform duration-700 transform rotate-y-180 opacity-0" data-index="2">
                  <img src="https://i.pravatar.cc/100?img=3" class="w-16 h-16 rounded-full" />
                  <p class="text-base font-medium">"E-library NeoRead sukses jadi andalan saya untuk belajar di mana saja. Gak perlu lagi repot bawa buku fisik!"</p>
                  <footer class="text-sm text-gray-500">Ravael, Manager</footer>
                </div>
              </div>
              
      
           <!-- Right Arrow -->
<button onclick="nextTestimonial()" class="absolute right-0 top-1/2 translate-x-10 -translate-y-1/2 z-10">
    ›
  </button>
          </div>
        </div>
      
        <script>
          let current = 0;
          const cards = document.querySelectorAll(".testimonial-card");
      
          function showCard(index) {
            cards.forEach((card, i) => {
              if (i === index) {
                card.classList.remove("rotate-y-180", "opacity-0");
                card.classList.add("rotate-y-0", "opacity-100");
              } else {
                card.classList.remove("rotate-y-0", "opacity-100");
                card.classList.add("rotate-y-180", "opacity-0");
              }
            });
          }
      
          function prevTestimonial() {
            current = (current - 1 + cards.length) % cards.length;
            showCard(current);
          }
      
          function nextTestimonial() {
            current = (current + 1) % cards.length;
            showCard(current);
          }
      
          // Init
          showCard(current);
        </script>
      
        <style>
          .perspective {
            perspective: 1000px;
          }
      
          .rotate-y-180 {
            transform: rotateY(180deg);
          }
      
          .rotate-y-0 {
            transform: rotateY(0deg);
          }
        </style>
      </section>
      
      

      <section id="cta" class="py-16 text-center" style="background-color: #b7d6ec">
        <div class="container mx-auto px-4 text-white max-w-xl">
          <h2 class="text-4xl font-extrabold mb-4 drop-shadow-lg">Siap Menjelajah Ilmu?</h2>
          <p class="text-lg mb-8 opacity-90">Gabung sekarang dan temukan buku-buku menarik setiap harinya.</p>
          <a href="{{ route('login') }}"
          class="inline-block px-6 py-3 text-lg font-semibold rounded-lg bg-[#0163AB] text-white shadow-md
                 transition-shadow duration-300
                 hover:shadow-[0_0_15px_4px_rgba(158,204,237,0.7)] hover:brightness-110
                 focus:outline-none focus:ring-4 focus:ring-[#9ecced]/50">
         Masuk Sekarang
       </a>
       
        </div>
      </section>
      
      


      <footer class="text-white py-10" style="background-color: #0163AB">
        <div class="container mx-auto px-4">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-sm">
            <!-- NeoRead Info -->
            <div>
              <h5 class="text-xl font-bold mb-2">NeoRead</h5>
              <p class="text-gray-300">
                Platform baca digital modern untuk pelajar dan masyarakat umum.  
                Baca di mana saja, kapan saja.
              </p>
              <div class="flex space-x-4 mt-4 text-xl text-gray-300">
                <a href="#" class="hover:text-white"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
      
            <!-- Eksplor -->
            <div>
              <h6 class="font-semibold mb-2">Eksplor</h6>
              <ul class="space-y-1 text-gray-300">
                <li><a href="#" class="hover:text-white">Katalog Buku</a></li>
                <li><a href="#" class="hover:text-white">Kategori</a></li>
                <li><a href="#" class="hover:text-white">Favorit</a></li>
                <li><a href="#" class="hover:text-white">Terbaru</a></li>
              </ul>
            </div>
      
            <!-- Bantuan -->
            <div>
              <h6 class="font-semibold mb-2">Bantuan</h6>
              <ul class="space-y-1 text-gray-300">
                <li><a href="#" class="hover:text-white">Pusat Bantuan</a></li>
                <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
                <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                <li><a href="#" class="hover:text-white">Laporkan Masalah</a></li>
              </ul>
            </div>
      
            <!-- Kontak -->
            <div>
              <h6 class="font-semibold mb-2">Kontak</h6>
              <ul class="text-gray-300 space-y-1">
                <li>Email: support@neoread.id</li>
                <li>Telp: (021) 1234-5678</li>
                <li>Alamat: Jl. Literasi No. 45, Bogor</li>
              </ul>
            </div>
          </div>
      
          <!-- Bottom -->
          <div class="flex flex-col md:flex-row justify-between items-center border-t border-gray-700 mt-10 pt-4 text-xs text-white">
            <p>&copy; 2025 NeoRead. All rights reserved.</p>
            <div class="space-x-4 mt-2 md:mt-0">
              <a href="#" class="hover:text-white">Tentang</a>
              <a href="#" class="hover:text-white">Karier</a>
              <a href="#" class="hover:text-white">Blog</a>
            </div>
          </div>
        </div>
      </footer>
      
      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
