<x-layout>
    <form method="POST" action="{{route('books.store')}}">
        @csrf
        <div class="mb-3">
          <label class="form-check-label" for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label class="form-check-label" for="author">Author</label>
            <input type="text" class="form-control" id="author" name="title">
          </div>

          <div class="mb-3">
            <label class="form-check-label" for="published_year">Published Year</label>
            <input type="text" class="form-control" id="publised_year" name="published_year">
          </div>

          <div class="mb-3">
            <label class="form-check-label" for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-layout>