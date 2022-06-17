<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

use App\Http\Requests\ComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        /* $data = $request->all();
        Comic::create($data); */

        /* Validazione dati */
        /* $validated_data = $request->validate([
            'title' => 'required|max:100',
                'description' => 'nullable',
                'thumb' => 'required',
                'price' => 'nullable',
                'series' => 'nullable',
                'sale_date' => 'nullable',
                'type' => 'nullable',
        ]); */

        $validated_data = $request->validated();

        Comic::create($validated_data);

        //dd($validation_data);

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        /* Validazione dati */
        /* $validated_data = $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'nullable',
            'series' => 'nullable',
            'sale_date' => 'nullable',
            'type' => 'nullable',
        ]); */

        $validated_data = $request->validated();

        $comic->update($validated_data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
