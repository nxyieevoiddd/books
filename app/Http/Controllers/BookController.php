<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('books.create');
    }
    
    public function store(Request $request)
    {
        Book::create([
            'title' =>  $request->input('title'),
            'author' =>  $request->input('author'),
            'release_at' =>  $request->input('release_at'),
            'description' =>  $request->input('description')
        ]);
        return "sucess";
    }

    public function index()
    {
        return Book::all();
    } 
}
