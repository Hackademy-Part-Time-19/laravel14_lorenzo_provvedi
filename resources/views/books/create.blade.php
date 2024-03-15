<x-layout>
    <x-success></x-success>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Aggiungi libro</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}">

        </div>
        @error('title')
            <span class="small text-danger">{{ $message }}</span>
        @enderror

        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input name = "price" type="decimal" class="form-control" id="price" value="{{ old('price') }}">

        </div>
        @error('price')
            <span class="small text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input name="description" type="text" class="form-control" id="description"
                value="{{ old('description') }}">

        </div>
        @error('description')
            <span class="small text-danger">{{ $message }}</span>
        @enderror

        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            @foreach ($genres as $genre)
                <input name= "genres[]" type="checkbox" class="btn-check" id="btncheck{{ $genre->id }}"
                    autocomplete="off" value="{{ $genre->id }}">
                <label class="btn btn-outline-primary" for="btncheck{{ $genre->id }}">{{ $genre->name }}</label>
            @endforeach

        </div>


        <div class="mb-3">
            <label for="image" class="form-label">immagine</label>
            <input name="image" type="file" class="form-control" id="image" value="{{ old('image') }}">

        </div>
        @error('image')
            <span class="small text-danger">{{ $message }}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</x-layout>
