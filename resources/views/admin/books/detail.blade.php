@extends('template.base')

@section('tittle', ' Detail buku')

@section('content')

@if (session('message'))
<div class="alert alert-warning">
{{session('message')}}
</div>
@endif
    
<div class="page-header">
    <h3 class="page-title">Detail buku</h3>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset($book->cover) }}" class="card-img" alt="{{ $book->tittle}}">
        </div>
    </div>

    <div class="col-md-8">
        <div class="card p-4">
            <h4 class="mb-3">{{ $book->tittle }}</h4>
            <p><strong>Penulis:</strong> {{ $book->author }}</p>
            <p><strong>Penerbit:</strong> {{ $book->publisher }}</p>
            <p><strong>Tahun cetak:</strong> {{ $book->year }}</p>
            <p><strong>Kategori:</strong> {{ $book->category->name}}</p>
            <p><strong>stok:</strong> 

            @if($book->stock > 0) 
            <span class="badge bg-success">Tersedia ({{ $book->stock }})</span>
            @else
            <span class="badge bg-danger">Tidak Tersedia</span>
             @endif
             
        </p>
        <div class="mt-3">
            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning">Edit</a>
            <button class="btn btn-danger" onclick="confirmDelete({{ $book->id }})">Hapus</button>
            <a href="{{ route('book') }}" class="btn btn-secondary">Kembali</a>
            <form id="delete-form-{{ $book->id }}" action="{{ route('book.destroy', $book->id) }}" method="post" style="display: none">
                @csrf
                @method('DELETE')
            </form>
        </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(bookId) {
        Swal.fire({
  title: "APAKAH ANDA YAKIN 😏??",
  text: "DATA BUKU AKAN DIHAPUS PERMANEN!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "YEAH, hapuz!"
}).then((result) => {
  if (result.isConfirmed) {
    document.getElementById('delete-form-' + bookId).submit();
  }
});
    }
</script>

@endsection