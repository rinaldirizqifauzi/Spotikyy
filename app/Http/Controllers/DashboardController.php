<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Type;
use App\Models\Genre;
use App\Models\Posting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $album = Band::all();
        $genres = Genre::all();
        $types = Type::all();
        $songs = Posting::all();
        return view('layouts.dashboard.index', compact('album', 'genres','types','songs'));
    }

    public function showPostsByBands($id)
    {
        $posts = Posting::whereHas('bands', function ($query) use($id){
            return $query->where('id', $id);
        })->get();

        $genres = Genre::all();
        $songs = Posting::all();
        $types = Type::all();
        $band = Band::where('id', $id)->first();
        return view('layouts.dashboard.album',[
            'posts' => $posts,
            'songs' => $songs,
            'band' => $band,
            'genres' => $genres,
            'types' => $types,
            'bands' =>  Band::get(),
        ]);
    }

    public function showPostsBySong($id)
    {
        $posts = Posting::whereHas('bands', function ($query) use($id){
            return $query->where('id', $id);
        })->get();

        $genres = Genre::all();
        $types = Type::all();
        $songs = Posting::all();
        $band = Band::where('id', $id)->first();
        return view('layouts.dashboard.album',[
            'posts' => $posts,
            'songs' => $songs,
            'band' => $band,
            'genres' => $genres,
            'types' => $types,
            'bands' =>  Band::get(),
        ]);
    }

    public function showPostsByGenres($id)
    {
        $posts = Posting::whereHas('genres', function ($query) use($id){
            return $query->where('id', $id);
        })->get();

        $songs = Posting::all();
        $genres = Genre::all();
        $types = Type::all();
        $genre = Genre::where('id', $id)->first();
        return view('layouts.dashboard.genre',[
            'posts' => $posts,
            'songs' => $songs,
            'types' => $types,
            'genres' => $genres,
            'genre' => $genre,
            'genres' =>  Genre::get(),
        ]);
    }

    public function showPostsByTypes($id)
    {
        $posts = Posting::whereHas('types', function ($query) use($id){
            return $query->where('id', $id);
        })->get();

        $songs = Posting::all();
        $types = Type::all();
        $genres = Genre::all();
        $type = Type::where('id', $id)->first();
        return view('layouts.dashboard.type',[
            'posts' => $posts,
            'songs' => $songs,
            'types' => $types,
            'type' => $type,
            'genres' => $genres,
            'types' =>  Type::get(),
        ]);
    }
}
