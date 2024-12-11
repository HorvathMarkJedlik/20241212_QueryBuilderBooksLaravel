<x-layout>
    <h1>Books</h1>
    <ul>
        @foreach ($books as $book )
            {{-- <li><a href="{{route('books.show', $book->id)}}">{{$book->title}}</a></li> --}}
            <li><a href="/books/{{$book->id}}">{{$book->title}}</a></li>
        @endforeach
    </ul>
</x-layout>