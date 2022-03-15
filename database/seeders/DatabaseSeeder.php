<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Character;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //The books in the database
        $books = [
            new Book([
                'author' => 'J.K Rowling',
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'year' => 1997,
                'img_url' => 'harry-potter.jpeg',
                'password' => 'alohomora',
                'hint' => 'Unlocking spell',
                'hint_url' => 'https://pottermore.fandom.com/wiki/Unlocking_Spell'
            ]),

            new Book([
                'author' => 'J.R.R Tolkien',
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'year' => 1954,
                'img_url' => 'lord-of-the-rings.jpeg',
                'password' => 'mellon',
                'hint' => 'Speak friend, and enter',
                'hint_url' => 'https://lotr.fandom.com/wiki/Doors_of_Durin'
            ]),
        ];
        foreach ($books as $book) {
            $book->save();
        }

        //The questions in the database
        $questions = [
            new Question([
                'question' => 'What word would best describe you?',
                'a' => 'Bravery',
                'b' => 'Ambition',
                'c' => 'Loyalty',
                'd' => 'Determination',
                'e' => 'Wisdom',
                'book_id' => 1
            ]),

            new Question([
                'question' => 'What word would best describe you?',
                'a' => 'Courage',
                'b' => 'Speed',
                'c' => 'Strength',
                'd' => 'Relentlessness',
                'e' => 'Magic',
                'book_id' => 2
            ]),

            new Question([
                'question' => 'What is your favourite colour?',
                'a' => 'Red',
                'b' => 'Black',
                'c' => 'White',
                'd' => 'Orange',
                'e' => 'Blue',
                'book_id' => 1
            ]),

            new Question([
                'question' => 'What is your favourite colour?',
                'a' => 'Black',
                'b' => 'White',
                'c' => 'Red',
                'd' => 'Green',
                'e' => 'Brown',
                'book_id' => 2
            ])
        ];

        foreach ($questions as $question) {
            $question->save();
        }

        //The characters in the database
        $characters = [
            new Character([
                'name' => 'Gandalf the White',
                'age' => 11000,
                'creature' => 'Wizard',
                'alignment' => 'Good',
                'power' => 'Magic',
                'colour' => 'White',
                'book_id' => 2,
                'summary' => 'Gandalf the White replaced Saruman the White as
                the leader of the Istari in the War of the Ring. Gandalf is old and
                wise and has experienced much in his lifetime, as have you! You rely
                on your powers and see the good in everyone around you. Most of all,
                you never underestimate anyone, and know that also a seemingly insignificant
                person can change the course of the world. This humility makes you a great
                leader and mentor to others, and make people dare to believe in themselves.
                You are the sort of booster everyone needs in their life!'
            ])
        ];

        foreach ($characters as $character) {
            $character->save();
        }
    }
}
