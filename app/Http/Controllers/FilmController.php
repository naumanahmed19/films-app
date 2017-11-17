<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFilmRequest;
use App\Film;
use Input;
class FilmController extends Controller
{

    /**
     * @return mixed
     */
    public function index()
    {
        $films = Film::with('comments')->latest()->paginate(5);
        return view('films.index',compact('films'));
    }
    /**
     * @param Film $film
     * @return Film
     */
    public function show(Film $film)
    {
        $film = Film::whereId($film->id)->first();
        return view('films.show',compact('film'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(CreateFilmRequest $request)
    {
        $input = $request->except(['_token','category','file']);
        $film = Film::create($input);
        $film->categories()->attach(Input::get(['category']));
        $film->featuredImage($request);
        return redirect()->route('films.index')->with(['message'=>'Your Item is saved.']);
    }
}
