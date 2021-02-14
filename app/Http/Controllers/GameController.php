<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('game.index')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $gameSlug = $this->setSlug($request->title);

        dd($gameSlug);
    
        $game = [
            $request->title,
            $gameSlug,
            $request->abreviatura,
            $request->descricao
        ];

        DB::insert("INSERT INTO game (title,slug,abreviatura,descricao) VALUES (?,?,?,?)", $game);

        return redirect()->action('gameController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(game $game)
    {
        //
    }

    private function setSlug($title)
    {

        $gameSlug = str_slug($title);
        
        dd($gameSlug); 

        $game = DB::select("SELECT * FROM game");

        $t = 0;
        foreach ($game as $game) {
            if (str_slug($game->title) === $gameSlug) {
                $t++;
            }
        }

        if ($t > 0) {
            $gameSlug = $gameSlug . '-' . $t;
        }

        return $gameSlug;
    }
}
