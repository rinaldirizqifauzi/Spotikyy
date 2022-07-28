<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $data = Type::all();
        return view('data.types.index', compact('data'));
    }

    public function create()
    {
        return view('data.types.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required|unique:genres'
        ]);

        Type::create($validatedData);
        return redirect()->route('type.index');
    }

    public function edit($id)
    {
        $data = Type::find($id);
        return view('data.types.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' =>'required|unique:genres'
        ]);

        Type::find($id)->update($validatedData);
        return redirect()->route('type.index');
    }

    public function delete($id)
    {
        $genre = Type::find($id);
        $genre->delete();
        return redirect()->route('genre.index');
    }
}
