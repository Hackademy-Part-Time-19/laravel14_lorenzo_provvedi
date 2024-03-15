<x-layout>
    <x-success></x-success>
    <x-delete></x-delete>
    <h1>
        Elenco libri
    </h1>
    @foreach ($books as $book)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}
                </p>
                <p class="card-text">{{ $book->price }}
                </p>
                @foreach ($book->genres as $genre)
                    <button class="btn btn-primary">{{ $genre->name }}</button>
                @endforeach


            </div>
        </div>
    @endforeach
</x-layout>
