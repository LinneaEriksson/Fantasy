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
                You are the sort of booster everyone needs in their life!',
                'img_url' => 'gandalf-the-white.jpeg'
            ]),

            new Character([
                'name' => 'Frodo Baggins',
                'age' => 50,
                'creature' => 'Hobbit',
                'alignment' => 'Good',
                'power' => 'Courage',
                'colour' => 'Brown',
                'book_id' => 2,
                'summary' => 'Frodo Baggins is small and
                seemingly unimportant in the grand scheme of things.
                But in the War of the Ring, he once and again proves
                his courage and determination to save the world from
                everlasting darkness. You share Frodo\'s strong determination and courage
                - although others might underestimate you, you never shy away from a quest
                that you find important. You care deeply for your friends and always do your
                best to keep them out of harms way. And although you enjoy the comforts of
                home, you always long for a new adventure!',
                'img_url' => 'frodo-baggins.jpeg'
            ]),

            new Character([
                'name' => 'Sauron',
                'age' => 1000000,
                'creature' => 'Maiar / Dark Lord',
                'alignment' => 'Evil',
                'power' => 'Magic',
                'colour' => 'Black',
                'book_id' => 2,
                'summary' => 'Maybe not the outcome you were hoping
                for. Sauron started out as a Maiar and creator of the
                universe, and fell into darkness due to greed, bitterness
                and megalomania. But don\'t despair! Sure, Sauron is the
                Dark Lord that wants to rule everyone and cover the universe
                in endless darkness, but he does have some good qualities too.
                For example, he provides secure employment for thousands and
                thousands of orcs, men, trolls and nazgûls and gives them a
                sense of purpose and ambition. He has great charisma and like Sauron,
                you are good at making people (maybe manipulating them…) follow you
                and your ideals. But maybe you should review your views on humankind.',
                'img_url' => 'sauron.jpeg'
            ]),

            new Character([
                'name' => 'Legolas Greenleaf',
                'age' => 2931,
                'creature' => 'Elf',
                'alignment' => 'Good',
                'power' => 'Speed',
                'colour' => 'Green',
                'book_id' => 2,
                'summary' => 'Legolas Greenleaf is a swift and agile
                elf that is quick to lend a helping hand. Despite his age,
                he is unfamiliar with death prior to his joining the Fellowship.
                You share this naïveté with Legolas and although you would like
                to appear as a wise and experienced person, you are sometimes
                overwhelmed by the harsh reality of things. Nonetheless, you are always
                in a good mood and do your best to make the people around you feel safe
                and happy. You might be too quick to join different projects sometimes,
                but your kindness and ability to adapt helps you overcome any problems.',
                'img_url' => 'legolas-greenleaf.jpeg'
            ]),

            new Character([
                'name' => 'Gimli, son of Glóin',
                'age' => 140,
                'creature' => 'Dwarf',
                'alignment' => 'Good',
                'power' => 'Strength',
                'colour' => 'Red',
                'book_id' => 2,
                'summary' => 'Gimli, son of Glóin is a courageous and
                strong dwarf from the Misty Mountains. He starts out
                disliking and outright mocking his companion Legolas,
                but before long the two are best friends. Like Gimli,
                you sometimes give a grumpy impression, but everyone that
                gets to know you knows that inside that hard shell, there is a
                sweet and loving person with unwavering loyalty. You would never
                leave a friend behind and would cross great distances to aid the
                people you care about. Those who have you as their friend could not
                wish for a more loyal and dedicated companion.',
                'img_url' => 'Gimli-son-of-gloin.jpeg'
            ]),

            new Character([
                'name' => 'Gollum / Sméagol',
                'age' => 600,
                'creature' => 'River Folk',
                'alignment' => 'In-between',
                'power' => 'Relentlessness',
                'colour' => 'Grey',
                'book_id' => 2,
                'summary' => 'Sméagol is curious and likes the pretty things in life,
                but Gollum has made him forsake most of his good qualities. Like Sméagol,
                you sometimes let the dark side of you get the upper hand and lead you to
                do things you might regret later. The upside of having two personalities is
                that you are never alone, and although most people might find you weird, you
                can be really sweet and willing to please those you look up to, and you would
                never give up on anything that is important to you. Due to your disposition
                however, you should beware the attachment to material goods and remember: all
                that is gold does not glitter. In the end, the relationships we have built along
                the way may be the most precious.',
                'img_url' => 'gollum.jpeg'
            ]),

            new Character([
                'name' => 'Harry Potter',
                'age' => 11,
                'creature' => 'Wizard',
                'alignment' => 'Good',
                'power' => 'Bravery',
                'colour' => 'Red',
                'book_id' => 1,
                'summary' => 'Once you embrace the past and stop hiding under a stair you will find out that you are more brave than you think. You care more about others than your self and are a loyal friend which is a great quality, just make sure no one is using it against you.',
                'img_url' => 'harry-potter.jpeg'
            ]),

            new Character([
                'name' => 'Hermione Granger',
                'age' => 11,
                'creature' => 'Witch',
                'alignment' => 'Good',
                'power' => 'Ambition',
                'colour' => 'Blue',
                'book_id' => 1,
                'summary' => 'You are the smartest person in your class and you never skip a chance to read a book or learn something new. You care a lot about your friends and family.but make sure to make time for them, they need you more than they think.',
                'img_url' => 'hermione-granger.jpeg'
            ]),

            new Character([
                'name' => 'Ron Weasley',
                'age' => 11,
                'creature' => 'Wizard',
                'alignment' => 'Good',
                'power' => 'Loyalty',
                'colour' => 'Orange',
                'book_id' => 1,
                'summary' => 'To you family and friends means everything. Sometimes it feels like you give too much of your self without receiving the same back. Don\'t worry, your friends appreciate you, but you should get rid of your pet rat, he can\'t be trusted.',
                'img_url' => 'ron-weasley.jpeg'
            ]),

            new Character([
                'name' => 'Voldemort',
                'age' => 71,
                'creature' => 'Wizard',
                'alignment' => 'Evil',
                'power' => 'Determination',
                'colour' => 'Black',
                'book_id' => 1,
                'summary' => 'You have the feeling like everybody is against you all the time. Maybe try to be kind to the people around you and you could make some friends. Or just stop spending all your free time with your pet snake, that would work too.',
                'img_url' => 'voldemort.jpeg'
            ]),

            new Character([
                'name' => 'Albus Dumbledore',
                'age' => 116,
                'creature' => 'Wizard',
                'alignment' => 'Good',
                'power' => 'Wisdom',
                'colour' => 'White',
                'book_id' => 1,
                'summary' => 'Both you and the people around you sees you as pure and wise. You have never done anything wrong and seems to have the answer to everything, true right? We know you have more layers than that, but don\'t worry, we won\'t tell if you don\'t!',
                'img_url' => 'albus-dumbledore.jpeg'
            ]),

            new Character([
                'name' => 'Severus Snape',
                'age' => 38,
                'creature' => 'Wizard',
                'alignment' => 'In-between',
                'power' => 'Ambition',
                'colour' => 'Black',
                'book_id' => 1,
                'summary' => 'You may look hard on the outside but the people who really knows you know that you\'re not as hard as you look. You do right by not trusting everyone, watch out for snakes.',
                'img_url' => 'severus-snape.jpeg'
            ]),

            new Character([
                'name' => 'Dobby',
                'age' => 37,
                'creature' => 'Elf',
                'alignment' => 'Good',
                'power' => 'Loyalty',
                'colour' => 'White',
                'book_id' => 1,
                'summary' => 'You don\'t like to be told what to do and that\'s a good thing. Don\'t let anyone boss over you.',
                'img_url' => 'dobby.jpeg'
            ]),
        ];

        foreach ($characters as $character) {
            $character->save();
        }
    }
}
