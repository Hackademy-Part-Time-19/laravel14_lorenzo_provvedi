<x-layout>
    <x-success></x-success>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <form action="{{ route('books.update', ['book' => $book]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1>Aggiorna il libro{{ $book->title }}</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title"
                value="{{ old('title' . $book->title) }}">

        </div>
        @error('title')
            <span class="small text-danger">{{ $message }}</span>
        @enderror

        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input name = "price" type="decimal" class="form-control" id="price"
                value="{{ old('price' . $book->price) }}">

        </div>
        @error('price')
            <span class="small text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input name="description" type="text" class="form-control" id="description"
                value="{{ old('description' . $book->description) }}">

        </div>
        @error('description')
            <span class="small text-danger">{{ $message }}</span>
        @enderror

        <div class="mb-3">
            <label for="image" class="form-label">immagine</label>
            <input name="image" type="file" class="form-control" id="image"
                value="{{ old('image' . $book->image) }}">

        </div>
        @error('image')
            <span class="small text-danger">{{ $message }}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</x-layout>
