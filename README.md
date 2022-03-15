<img src="https://media.giphy.com/media/dUtFT6wgHhnvtADh0h/giphy.gif">

# Fantasy

Find out wich fantasy character you are by taking our quest!

# Installation

1. You can clone this repo and open it with your favourite code-editor.
2. Clone the project and set up your DB. Run: php artisan serve php artisan migrate:fresh --seed (gives you our DB).
3. Visit the localhost in your browser.
4. Enjoy!

# Code Review

Code review written by Hanna Rosenberg & Sofia Dersén

1. General - It would be nice with some data in the database seeder to be able to run the application.
2. CharactersController - CharactersController is expecting a post-request, but are using both $\_POST and $\_GET
3. Don’t forget that validation is a requirement in the assignment.
4. CharactersController – If the secret password is wrong, there is an echo. Maybe this would work better as an error?
5. Book.blade.php & BookController - Book.blade.php with associated controller could be renamed to quiz.blade.php and QuizController for more clarity.
6. General - The application has four lint-errors.
7. Book.blade.php - Try to avoid using <br> in book.blade.php and style it with margins in CSS instead.
8. BookController - (‘id’, ‘=’ , $book_id) could be written (‘id’, $book_id) instead for shorter code.
9. General - The code would be easier to follow with some comments.
10. Book.blade.php - It doenst seem like the questions $question_two and $questionthree is in use. Maybe they can me removed for shorter code.
11. Character Gallery Controller - Instead of $ GET you can use find()=>segment()
12. General - When the codereview is written there are’nt any tests for the routes.
13. General - Don’t forget that validation is a requirement in the assignment.
14. CharacterGalleryController - CharactersControllerGallery is expecting a post-request, but are using $\_GET.
15. General - Good idea with a quiz! But more questions than one would'nt hurt.
16. Character.gallery.blade – Alt text for the accessibility.
17. General - Maybe you can rename gallery.blade.php to bookgallery.blade.php (and its controllers) for the user to not get confused. It's easy to mix it up with the CharacterGallery.
18. General - Don’t forget Route model binding in your routes.
19. CharacterController - Where you get the post-request “secret” you could add a validation (this =>validate($request)
20. ReadMe - Don’t forget to add information to your README-file!
