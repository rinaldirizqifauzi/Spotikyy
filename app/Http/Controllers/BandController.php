<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function index()
    {
        $data = Band::all();
        return view('data.bands.index', compact('data'));
    }

    public function create()
    {
        return view('data.bands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:bands',
            'image' => 'required|mimes:png,jpg',
            'thumbnail' => 'required|mimes:png,jpg',
        ]);

        // Gambar
        $file_image = $request->file('image');
        $file_image->move('image', $file_image->getClientOriginalName());
        $file_image_name = $file_image->getClientOriginalName();

        // Thumbnail
        $file_thumbnail = $request->file('thumbnail');
        $file_thumbnail->move('thumbnail', $file_thumbnail->getClientOriginalName());
        $file_thumbnail_name = $file_thumbnail->getClientOriginalName();

        $data = new Band();
        $data->nama = $request->nama;
        $data->image = $file_image_name;
        $data->thumbnail = $file_thumbnail_name;
        $data->save();
        return redirect()->route('band.index');
    }

    public function edit($id)
    {
        $data = Band::find($id);
        return view('data.bands.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|mimes:png,jpg',
            'thumbnail' => 'required|mimes:png,jpg',
        ]);

        $ubah = Band::find($id);
        $image = $ubah->image;
        $thumbnail = $ubah->thumbnail;

        $data = [
            'nama' => $request->nama,
            'image' => $image,
            'thumbnail' => $thumbnail,
        ];

        $request->image->move(public_path().'/image', $image);
        $request->thumbnail->move(public_path().'/thumbnail', $thumbnail);

        $ubah->update($data);
        return redirect()->route('band.index');
    }

    public function delete($id)
    {
        $data = Band::find($id);
        $file_image = public_path('/image/'). $data->image;
        $file_thumbnail = public_path('/thumbnail/'). $data->thumbnail;
        // cek jika ada Image
        if (file_exists($file_image)){
            // Maka Hapus Image yang ada di public
            @unlink($file_image);
        }

        // cek jika ada Thumbnail
        if (file_exists($file_thumbnail)){
            // Maka Hapus Thumbnail yang ada di public
            @unlink($file_thumbnail);
        }

        $data->delete($id);
        return redirect()->route('band.index');
    }
}
