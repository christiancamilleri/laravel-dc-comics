<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Dotenv\Validator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator as IlluminateValidationValidator;
use PHPUnit\Util\Xml\Validator as XmlValidator;
use Ramsey\Uuid\Rfc4122\Validator as Rfc4122Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validation($request);

        $formData = $request->all();


        $newComic = new Comic();

        $newComic->fill($formData);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);


        $formData = $request->all();

        $comic->update($formData);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($request)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'description' => 'required',
        //     'thumb' => 'required|max:255',
        //     'price' => 'required|max:255',
        //     'series' => 'required|max:255',
        //     'sale_date' => 'required',
        //     'type' => 'required|max:100',
        //     'artists' => 'required',
        //     'writers' => 'required',
        // ]);

        $formData = $request->all();

        $validator = FacadesValidator::make($formData, [
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required|max:255',
            'sale_date' => 'required',
            'type' => 'required|max:100',
            'artists' => 'required',
            'writers' => 'required',
        ], [
            'title.required' => 'Questo campo non può rimanere vuoto',
            'title.max' => 'Il contenuto del titolo non può superare i 255 caratteri',
            'description.required' => 'Questo campo non può rimanere vuoto',
            'thumb.required' => 'Questo campo non può rimanere vuoto',
            'price.required' => 'Questo campo non può rimanere vuoto',
            'series.required' => 'Questo campo non può rimanere vuoto',
            'series.max' => 'Il contenuto non può superare 255 caratteri',
            'sale_date.required' => 'Questo campo non può rimanere vuoto',
            'type.required' => 'Questo campo non può rimanere vuoto',
            'type.max' => 'Il contenuto non può superare 100 caratteri',
            'artists.required' => 'Questo campo non può rimanere vuoto',
            'writers.required' => 'Questo campo non può rimanere vuoto',


        ])->validate();

        return $validator;
    }
}
