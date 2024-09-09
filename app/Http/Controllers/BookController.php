<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
{
$book = [
["judul" => "To Kill a Mockingbird", "penulis" => "Harper Lee", "tahun_terbit" => 1960],
["judul" => "1984", "penulis" => "George Orwell", "tahun_terbit" => 1949],
["judul" => "The Great Gatsby", "penulis" => "F. Scott Fitzgerald", "tahun_terbit" => 1925],
["judul" => "The Catcher in the Rye", "penulis" => "J.D. Salinger", "tahun_terbit" => 1951],
["judul" => "Moby-Dick", "penulis" => "Herman Melville", "tahun_terbit" => 1851]
];

return view('book', ['books' => $book]);
}
}
