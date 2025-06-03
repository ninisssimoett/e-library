@extends('template.base')
<!-- ini buat ngepanggil -->

@section ('tittle', 'Dashboard Admin')

@section('content')

@if(session('message'))
<div class="alert alert-sucsess">
  {{session('message')}}
</div>
@endif

  <div class="page-header">
      <h3 class="page-tittle">Tambah Data Buku Baru</h3>
  </div>

  <div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Silahkan isi untuk mendapatkan data baru</h4>

            <form class="forms-sample" action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Judul Buku</label>
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukan Judul">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail3">Pilih Kategori Buku</label>
                    <select name="category_id" id="category_id" class="form-control">
                      <option selected disabled>Pilih Kategori Buku</option>
                      @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                    <label for="author">Penulis</label>
                    <input name="author" type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Masukan Penulis">
                    @error('author')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="publisher">Penerbit</label>
                    <input name="publisher" type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" placeholder="Masukan Penerbit">
                    @error('publisher')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="year">Tahun Cetak</label>
                    <input name="year" type="number" class="form-control @error('year') is-invalid @enderror" id="year" placeholder="Masukan Tahun">
                    @error('year')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="stock">Stok</label>
                    <input name="stock" type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Masukan Stok">
                    @error('stock')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cover">Upload Cover</label>
                    <input name="cover" type="file" class="form-control @error('cover') is-invalid @enderror" id="cover" placeholder="Masukan Stok">
                    @error('cover')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

              <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            </form>
          </div>
        </div>
      </div>
  </div>


@endsection