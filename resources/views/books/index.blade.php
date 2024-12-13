<x-layout>
    <h1>Books</h1>
    <div class="row ">
        @foreach ($books as $book)
            {{-- <li><a href="{{route('books.show', $book->id)}}">{{$book->title}}</a></li> --}}
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title">{{ $book->title }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $book->author }}</li>
                        <li class="list-group-item">{{ $book->published_year }}</li>
                        <li class="list-group-item">{{ $book->price }} HUF</li>
                    </ul>
                    <div class="card-footer mt-auto">
                        <a class="btn btn-primary" href="/books/{{ $book->id }}">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
