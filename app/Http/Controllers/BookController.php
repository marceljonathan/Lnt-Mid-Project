<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('CRUD.create');
    }

    public function showForm(BookRequest $request){
        Book::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'terbit' => $request->terbit
        ]);
        return redirect(route('home'));
    }

    public function ViewAll(){
        $books = Book::all();
        return view('CRUD.view', ['datas' => $books]);
    }

    public function UpdateForm($id){
        $book = Book::find($id);
        return view('CRUD.update', ['buku' => $book]);
    }

    public function ShowUpdateForm(BookRequest $request, $id){
        $BookUpdate = Book::where('id', '=', $id)->first();

        $BookUpdate->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'terbit' => $request->terbit
        ]);
        return redirect(route('home'));
    }

    public function DeleteBuku($id){
        $BookDelete = Book::find($id);
        $BookDelete->delete();
        return redirect(route('ViewAll'))->with('success', 'Buku berhasil dihapus');
    }
}
