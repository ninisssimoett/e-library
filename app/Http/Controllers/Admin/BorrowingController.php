<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Borrow;
use Illuminate\Http\Request;

class borrowingController extends Controller
{
    public function borrowingunreturned(){
        // ambil dayta peminjaman yang statusnya = 'dipinjam'
        $borrowings = Borrow::where('status', 'dipinjam')->latest()->paginate(10);
        return view('admin.borrowing.unreturned', compact('borrowings'));
    }

    public function returnBook($id){
        @$borrowings = Borrow::findOrfail($id);

        // cek status buku
        if($borrowings->status === 'dipinjaam'){
            $borrowings->status = 'dikembalikan';
            $borrowings->save();

            // update stock
            $borrowings->book->increment('stock');
            return redirect()->back()->with('message', ' buku berhasil di kembalikan');
        }
        return redirect()->back()->with('message', ' buku sudah di kembalikan sebelumnya');
    }

    public function borrowingReturned(){
        // ambil dayta peminjaman yang statusnya = 'dikembalikan'
        $borrowings = Borrow::where('status', 'dikembalikan')->latest()->paginate(10);
        return view('admin.borrowing.returned', compact('borrowings'));
    }

    public function borrrowingAll() {
        $borrowings = Borrow::paginate(10);

        return view('admin.borrowing.borrowing-all', compact('borrowings'));
    }

    
}