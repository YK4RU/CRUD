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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
