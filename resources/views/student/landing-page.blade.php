@extends('student.base')
@section('title', 'welcome Student')

@section('content')

<!-- Hero Section -->
<section class="hero-background">
    <div class="hero-content">
        <a href="{{ route('student.all.book') }}" class="hero-button">See All Book</a>
    </div>
</section>

<section class="magazine-section text-center">
    <img src="{{ asset('purple/assets/magazinee.svg') }}" alt="Magazine Section" class="img-fluid" style="width: 75%; height: auto; margin-top: 30px;">
</section>

<section id="books" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-4 font-bold" style="color: #000000; font-weight: 700 !important; font-size: 23px;">
            Buku Terbaru
        </h2>
        <div class="d-flex justify-content-center flex-wrap gap-4">
            @foreach($books->take(4) as $book)
            <div class="card" style="width: 16rem;">
                <img src="{{ asset($book->cover) }}" class="card-img-top" alt="{{ $book->title }}" style="width: 100%; height: auto;">
                <div class="card-body text-start">
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
            @endforeach
        </div>

    
    </div>
</section>


<section id="books" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-4 font-bold" style="color: #000000; font-weight: 700 !important; font-size: 23px;">
            Buku Populer
        </h2>
        <div class="d-flex justify-content-center flex-wrap gap-4">
            @foreach($books->take(4) as $book)
            <div class="card" style="width: 16rem;">
                <img src="{{ asset($book->cover) }}" class="card-img-top" alt="{{ $book->title }}" style="width: 100%; height: auto;">
                <div class="card-body text-start">
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
            @endforeach
        </div>

    
    </div>
</section>





<!-- Pencarian Buku -->
<section id="search" class="py-5 bg-white">
    <div class="container">
        <h2 class="section-title text-center text-primary mb-4">Cari Buku</h2>
        <form action="#" method="GET" class="d-flex justify-content-center">
            <input type="text" name="keyword" class="form-control w-50 rounded-start" placeholder="Cari berdasarkan judul, penulis...">
            <button type="submit" class="btn btn-blue search-button">Cari</button>
        </form>
    </div>
</section>

@endsection
