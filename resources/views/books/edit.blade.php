<x-layout>
    <h1>Create new book</h1>
    <form method="POST" action="{{route('books.update', $book->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label class="form-check-label" for="title">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$book->title}}">
          @error('title')
            <div class="invalid-feedback">{{$message}}</div>
          @enderror
        </div>

        <div class="mb-3">
            <label class="form-check-label" for="author">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{$book->author}}">
            @error('author')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-check-label" for="published_year">Published Year</label>
            <input type="number" class="form-control @error('published_year') is-invalid @enderror" id="published_year" name="published_year" value="{{$book->published_year}}">
            @error('published_year')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-check-label" for="price">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$book->price}}">
            @error('price')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-layout>