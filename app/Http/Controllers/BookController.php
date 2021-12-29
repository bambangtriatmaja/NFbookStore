<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function index()
    {
        $kategori = Kategori::all();
        $latests = DB::table('books')->limit(6)->get();

        return view('contents.home', [
            'title' => 'Home',
            'kategori' => $kategori,
            'latests' => $latests
        ]);
    }
    function detail($id)
    {
        $book = Book::find($id);

        return view('contents.detail', [
            'title' => 'detail',
            'book' => $book,
            'books' => Book::all()
        ]);
    }
}
