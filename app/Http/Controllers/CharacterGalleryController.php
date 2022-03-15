<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterGalleryController extends Controller
{
    public function charactergallery()
    {
        $book_id = request()->query('book_id');
        $book = Book::where('id', '=', $book_id)->first();
        $characters = Character::all()->where('book_id', '=', $book_id);

        return view('/charactergallery', ['book' => $book, 'characters' => $characters]);
    }
}
