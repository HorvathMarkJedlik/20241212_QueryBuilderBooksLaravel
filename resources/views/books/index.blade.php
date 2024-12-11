<x-layout>
    <h1>Books</h1>
    <ul>
        @foreach ($books as $book )
            <li>{{$book->title}}</li>
        @endforeach
    </ul>
</x-layout>