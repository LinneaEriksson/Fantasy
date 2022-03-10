<style>
    body {
        background-color: rgb(66, 66, 78);
    }

    img {
        height: 500px;
        transition: transform 0.2s;
    }

    img:hover {
        transform: scale(1.1);
    }

    button {
        cursor: pointer;
        border: none;
        background-color: rgb(66, 66, 78);
        margin-top: 40px;
    }

    h1 {
        margin: auto;
        color: bisque;
    }

    p {
        font-size: 20px;
        color: bisque;
    }

    .book {
        color: bisque;
    }

    .book-container {
        display: flex;
    }
</style>


<?php

use App\Models\Book;
use App\Models\Character;
use Illuminate\Support\Facades\DB;



$books = DB::select('select * from books');
$characters = DB::select('select * from characters');

// foreach ($characters as $character) {
//     echo $character['name'];}
?>

<h1>Who are you?</h1>
<p> Take out test to find out, first choose your book!</o>
<div class="book-container">
    @foreach($books as $book)
    <div class="book">
        {{$book->title}}
        <!-- <form action="/book?id=<?= $book->id ?>" method="post"> -->
        <form action="book?id={{ $book->id }}/" method="post">
            <!-- <form action="{{ route('book') }}" method="POST"> -->
            @csrf
            <button> <img src="./images/books/<?= $book->img_url ?>" alt="Poster of the feature film <?= $book->title ?>"></button>
        </form>
    </div>
    @endforeach
</div>
<!-- <div class="characters-container">
    @foreach($characters as $character)
    <div class="character">
        <li>
            {{$character->name}}
            <img src="./images/characters/<?= $character->img_url ?>" alt="">
        </li>
    </div>
    @endforeach
</div> -->
