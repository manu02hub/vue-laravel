<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $songs = Song::all()->sortBy('id');
        $songs = Song::where('user_id', '=', auth()->id())->get();

        return Inertia::render('DashboardMusic', [
            'canciones' => $songs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('AddMusic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'cantantes' => 'required|string|max:255',
            'img' => 'required|string|max:255',
            'mp3' => 'required|string|max:255',
        ]);

        // dd($request);


        $imagen = $request->img;
        $music = $request->mp3;
        $imagen = str_replace('C:\fakepath\\', "http://localhost/img/DWES/p3/img/", $imagen);
        $music = str_replace('C:\fakepath\\', "http://localhost/img/DWES/p3/musica/", $music);

        $song = Song::create([
            'user_id' => auth()->id(),
            'titulo' => $request->titulo,
            'cantantes' => $request->cantantes,
            'img' => $imagen,
            'mp3' => $music,
        ]);

        // $song = new Song();
        // $song->song = $request->song;

        // dd($request->song);

        $song->save();

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id);
        // dd($curso);
        return Inertia::render('EditMusic', [
            'cancion' => $song,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {

        if ($request->titulo != null) {
            $titulo =  $request->titulo;
        }

        if ($request->cantantes != null) {
            $cantantes =  $request->cantantes;
        }

        if ($request->img != null) {
            $imagen = $request->img;
            $imagen = str_replace('C:\fakepath\\', "http://localhost/img/DWES/p3/img/", $imagen);
        }

        if ($request->mp3 != null) {
            $music = $request->mp3;
            $music = str_replace('C:\fakepath\\', "http://localhost/img/DWES/p3/musica/", $music);
        }

        Song::find($id)->update([
            'titulo' => $titulo,
            'cantantes' => $cantantes,
            'img' => $imagen,
            'mp3' => $music
        ]);


        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        $song = Song::find($id);

        $song->delete();

        return redirect(RouteServiceProvider::HOME);
    }
}
