@include('header')
@include('menu')

<?php

use App\Models\Book;
use App\Models\Character;
use Illuminate\Support\Facades\DB;


// $books = Book::all();
// $characters = Character::all();
// $books = DB::select('select * from books');
// $characters = DB::select('select * from characters');

// foreach ($characters as $character) {
//     echo $character['name'];}
?>
<section class="index">
    <h1>Who are you?</h1>
    <p> Take our test to find out!<br>
        First choose your book:</p>
    <div class="book-container">
        @foreach($books as $book)
        <div class="book">
            {{$book->title}}

            <form action="book?id={{ $book->id }}" method="post">

                @csrf
                <button> <img src="./images/books/<?= $book->img_url ?>" alt="Poster of the feature film <?= $book->title ?>"></button>
            </form>
        </div>
        @endforeach
    </div>
</section>


@include('footer')
