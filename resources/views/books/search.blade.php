<x-layout>
    <h1>Search book</h1>
    <form method="POST" action="{{route('books.process.search')}}">
        @csrf
        <div class="mb-3">
          <label class="form-check-label" for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-layout>