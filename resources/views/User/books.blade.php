<x-layout>
    <x-success></x-success>
    <x-delete></x-delete>
    <h1>Ciao, {{ auth()->user()->name }}</h1>
    <h2>
        Elenco dei tuoi libri:
    </h2>
    @foreach ($books as $book)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}
                </p>
                <p class="card-text">{{ $book->price }}
                </p>
                <a href="{{ route('books.edit', ['book' => $book]) }}" class="btn btn-primary">modifica</a>
                <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">elimina</button>
                </form>

            </div>
        </div>
    @endforeach
</x-layout>
