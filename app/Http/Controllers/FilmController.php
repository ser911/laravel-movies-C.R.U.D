<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index',compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validation

        $rules = [
        'Title' => 'required|string|max:50',
        'author' => 'required|string|max:50',
        'genre' => 'required|string|max:50',
        'length' => 'required|numeric|min:60|max:240'
        ];
        
        $request->validate($rules);

        //submission
        
       Film::create($request->all());

       //return

       return redirect()->route('films.index');
     
       

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
       

        return view('films.show', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        return view('films.edit', ['film'=> $film]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
         //validation

        $rules = [
        'Title' => 'required|string|max:50',
        'author' => 'required|string|max:50',
        'genre' => 'required|string|max:50',
        'length' => 'required|numeric|min:60|max:240'
        ];
        
        $request->validate($rules);

        //submission
        
       $film->update($request->all());

       //return

       return redirect()->route('films.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //deletion

        $film ->delete();
        
        //return

        return redirect()->route('films.index');
    }
}
