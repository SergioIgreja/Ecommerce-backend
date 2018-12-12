<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Book;
use Illuminate\Support\Facades\Storage;

class CoverController extends Controller
{
    public function image($id) {
      $book = Book::find($id);
      $path = str_replace('/home/eduardo/Desktop/laravel/book-ecommerce-api/public', '', $book->cover);
      return response()->file(public_path() . $path);
    }
}
