<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Character;
use App\Models\Question;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function character(Request $request)
    {
        $this->validate($request, [
            'secret' => 'required|string'
        ]);

        $answer = request()->get('answer');
        $secret = request()->get('secret');
        $book_id = request()->query('book_id');


        $character = Character::where('power', '=', $answer, 'and', 'book_id', '=', $book_id)->first();

        $book = Book::where('id', '=', $book_id)->first();
        $password = $book->password;

        if ($secret == $password) {
            return view('/character', ['character' => $character, 'answer' => $answer]);
        } else {

            // echo 'Wrong secret word! Try again!';
            return back()->withErrors('Wrong secret word! Try again!');
        }
    }
}
