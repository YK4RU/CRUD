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
        $photos = Photo::all();
        return view ('photos.index', compact('photos'));
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
        $created = Photo::create ([
            'NomedaImagem'=> $request->input('NomedaImagem'),
            'UrldaImagem'=> $request->input('UrldaImagem'),
        ]);

         if ($created){
            return redirect()->route('photos.index')->with('message', 'deu certo Ü');
        }else{
            return redirect()->back()->with('message', 'deu certo não Ü');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $photo = Photo::findOrFail($id);
        return view('photos.edit', compact('photos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $photo = Photo::findOrFail($id);
        $updated = $photo->Update($request->all());

        if ($updated){
            return redirect()->route('photos.index')->with('message', 'deu certo Ü');
        }else{
            return redirect()->back()->with('message', 'deu certo não Ü');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $photo = Photo::findOrFail($id);
        $deleted = $photo->delete();

        return redirect()->route('photos.index');
    }
}
