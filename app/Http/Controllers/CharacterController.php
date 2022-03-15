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

        $answer = $_POST['answer'];
        $secret = $_POST['secret'];
        $book_id = $_GET['book_id'];

        $character = Character::where('power', '=', $answer, 'and', 'book_id', '=', $book_id)->first();

        // if ($answer == 'Ambition' || $answer == 'Loyalty' || $answer == 'Magic') {
        //     $question = Question::where('book_id', '=', $book_id)->skip(2)->first();
        //     $alternatives = Character::all()->where('book_id', '=', $book_id);

        //     return view('/extra', ['answer' => $answer, 'question' => $question, 'secret' => $secret, 'alternatives' => $alternatives]);
        // }

        $book = Book::where('id', '=', $book_id)->first();
        $password = $book->password;

        if ($secret == $password) {
            return view('/character', ['character' => $character, 'answer' => $answer]);
        } else {
            echo 'Wrong secret word! Try again!';
            // return back()->withErrors('Wrong secret word! Try again!');
        }
    }
}
