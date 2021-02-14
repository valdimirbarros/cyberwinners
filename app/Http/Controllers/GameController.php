<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        DB::beginTransaction();
        try {
            $newGame = new Game();
            $newGame->title = $request->title;
            $newGame->slug = $gameSlug;
            $newGame->abbreviation = $request->abbreviation;
            $newGame->description = $request->description;
            if (!$newGame->save()) {
                return "Erro ao salvar registro!";
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->action('GameController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(game $game, $gameSlug)
    {
        $game = Game::where('slug', $gameSlug)->first();

        if (!empty($game)) {
            return view('game.show')->with('game', $game);
        } else {
            return redirect()->action('GameController@index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(game $game, $gameSlug)
    {
        $game = Game::where('slug', $gameSlug)->first();

        if (!empty($game)) {
            return view('game.edit')->with('game', $game);
        } else {
            return redirect()->action('GameController@index');
        }
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

        $gameSlug = Str::slug($title, '-');
        $game = Game::all();
        $t = 0;
        foreach ($game as $game) {
            if (Str::slug($game->title, '-') === $gameSlug) {
                $t++;
            }
        }

        if ($t > 0) {
            $gameSlug = $gameSlug . '-' . $t;
        }

        return $gameSlug;
    }
}
