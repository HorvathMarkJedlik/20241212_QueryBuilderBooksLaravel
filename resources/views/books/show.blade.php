<x-layout>
    <h1>{{$book->title}}</h1>
    <p>Author: {{$book->author}}</p>
    <p>Published year: {{$book->published_year}}</p>
    <p>Price: {{$book->price}}Ft</p>

    <a href="{{route('books.edit', $book->id)}}" class="btn btn-warning">Edit</a>
</x-layout>