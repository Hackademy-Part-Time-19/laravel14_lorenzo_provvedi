<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\User;
use App\Http\Requests\bookstorerequest;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $genres = Genre::all();
        return view('books.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(bookstorerequest $request)
    {

        $validated = $request->validated();
        $book = Book::create(['user_id' => auth()->user()->id, 'title' => $validated['title'], 'description' => $validated['description'], 'price' => $validated['price']]);
        //if ($request->hasFile('image') && $request->file('image')->isValid()){

        // };
        $book->genres()->attach($request->genres);
        return redirect()->back()->with(['success' => 'libro inserito con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(bookstorerequest $request, book $book)
    {
        $validated = $request->validated();
        $book->update(['title' => $validated['title'], 'description' => $validated['description'], 'price' => $validated['price']]);
        //if ($request->hasFile('image') && $request->file('image')->isValid()){

        // };
        return redirect()->back()->with(['success' => 'libro aggiornato con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        $book->delete();

        return redirect()->back()->with(['delete' => 'libro eliminato con successo']);
    }

    public function userBooks()
    {
        //$books = Book::where('id', $user->id);
        $books = auth()->user()->books;
        return view('user.books', compact('books'));
    }
}
