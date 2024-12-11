<x-layout>
    <h1>{{$book->title}}</h1>
    <p>Author: {{$book->author}}</p>
    <p>Published year: {{$book->published_year}}</p>
    <p>Price: {{$book->price}}Ft</p>

    <a href="{{route('books.edit', $book->id)}}" class="btn btn-warning mb-2">Edit</a>

    <form action="{{route('books.destroy', $book->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</x-layout>