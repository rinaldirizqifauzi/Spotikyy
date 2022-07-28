<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Genre;
use App\Models\Type;
use App\Models\Posting;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function index()
    {
        $data = Posting::all();
        return view('post.index',compact('data'));
    }

    public function create()
    {
        $genres = Genre::all();
        $bands = Band::all();
        $types = Type::all();
        return view('post.create', compact('bands', 'genres','types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|max:40960|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'nama' => 'required',
            'id_band' => 'required',
            'id_genre' => 'required',
            'id_type' => 'required',
            'deskripsi' => 'required'
        ]);

        // Video
        $file = $request->file('video');
        $file->move('upload', $file->getClientOriginalName());
        $file_name = $file->getClientOriginalName();


        $data = new Posting();
        $data->video =  $file_name;
        $data->nama = $request->nama;
        $data->id_genre = $request->id_genre;
        $data->id_band = $request->id_band;
        $data->id_type = $request->id_type;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect()->route('posting.index');
    }

    public function show($id)
    {
        $songs = Posting::all();
        $genres = Genre::all();
        $types = Type::all();
        $data = Posting::find($id);
        return view('post.show', compact('data','types','genres','songs'));
    }

    public function fullscreen($id)
    {
        $data = Posting::find($id);
        return view('post.fullscreen', compact('data'));
    }

    public function edit($id)
    {
        $data = Posting::find($id);
        $bands = Band::all();
        $genres = Genre::all();
        $types = Type::all();
        return view('post.edit',  compact('data','bands','genres','types'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'id_band' => 'required',
            'id_genre' => 'required',
            'id_type' => 'required',
            'deskripsi' => 'required'
        ]);

        $ubah = Posting::find($id);

        $data = [
            'nama' => $request->nama,
            'id_band' => $request->id_band,
            'id_genre' => $request->id_genre,
            'id_type' => $request->id_type,
            'deskripsi' => $request->deskripsi,
        ];

        $ubah->update($data);
        return redirect()->route('posting.index');
    }

    public function delete($id)
    {
        $data = Posting::find($id);
        $file = public_path('/upload/'). $data->video;
        // cek jika ada video
        if (file_exists($file)){
            // Maka Hapus Video yang ada di public
            @unlink($file);
        }

        $data->delete($id);
        return redirect()->route('posting.index');
    }
}
