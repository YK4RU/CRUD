<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Photo;

class PhotosController extends Controller
{
    public readonly Photo $photo;

    public function __construct()
    {
        $this->photo = new Photo();
    }


    public function index()
    {
        $photos = $this->photo->all();
        return view ('photos.index', ['photos' => $photos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->photo->create ([
            'NomedaImagem'=> $request->input('NomedaImagem'),
            'UrldaImagem'=> $request->input('UrldaImagem'),
        ]);

         if ($created){
            return redirect()->back()->with('message', 'deu certo Ü');
        }
        return redirect()->back()->with('message', 'deu certo não Ü');
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
         return view('photos.delete', ['photo' => $photo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        return view('photos.edit', ['photo' => $photo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->photo->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated){
            return redirect()->back()->with('message', 'deu certo Ü');
        }
        return redirect()->back()->with('message', 'deu certo não Ü');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->photo->where('id', $id)->delete();

        return redirect()->route('photos.index');
    }
}
