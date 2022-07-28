<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $data = Genre::all();
        return view('data.genres.index',compact('data'));
    }

    public function create()
    {
        return view('data.genres.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required|unique:genres'
        ]);

        Genre::create($validatedData);
        return redirect()->route('genre.index');
    }

    public function edit($id)
    {
        $data = Genre::find($id);
        return view('data.genres.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' =>'required|unique:genres'
        ]);

        Genre::find($id)->update($validatedData);
        return redirect()->route('genre.index');
    }

    public function delete($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->route('genre.index');
    }
}
