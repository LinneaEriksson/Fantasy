@include('header')
@include('menu')

<section class="book-section">
    <h1>You have chosen {{$book->title}}!</h1>

    <img src="./images/books/{{$book->img_url}}" alt="">

    @include('errors')

    <h2>Question 1: {{$question->question}}</h2>
    <ul>
        <form action="/character?book_id={{$book->id}}" method="post">
            @csrf
            <input type="radio" id="huey" name="answer" value="{{$question->a}}" checked>
            <label for="huey">{{$question->a}}</label><br>
            <input type="radio" id="huey" name="answer" value="{{$question->b}}">
            <label for="huey">{{$question->b}}</label><br>
            <input type="radio" id="huey" name="answer" value="{{$question->c}}">
            <label for="huey">{{$question->c}}</label><br>
            <input type="radio" id="huey" name="answer" value="{{$question->d}}">
            <label for="huey">{{$question->d}}</label><br>
            <input type="radio" id="huey" name="answer" value="{{$question->e}}">
            <label for="huey">{{$question->e}}</label><br>
            <br>



            <h2>Write the secret word below</h2>
            <label for="secret">Secret word: </label>
            <input type="text" name="secret"></input>
            <br>
            <p>Hint: {{$book->hint}}</p>
            <br>

            <button type="submit">Find out who you are!</button>
        </form>
    </ul>
</section>

@include('footer')
