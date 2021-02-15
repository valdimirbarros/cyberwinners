<?php

namespace App\Http\Controllers;

use App\Player;
use App\Game;
use App\LinkPlayerGame;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('player.index')->with('players', $players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games = Game::all();
        return view('player.create')->with('games', $games);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fieldsToValidate =  [
            'name' => 'required|max:191',
            'nickname' => 'nullable|max:100',
            'description' => 'nullable|max:1000',
            'games' => 'required|array',
            'email' => 'nullable|max:191',
            'external_profile' => 'nullable|max:191',
        ];

        $messagesIfFailsValidation = [
            'name.required' => 'O campo Nome é obrigatório!',
            'name.max' => 'O campo Nome possui um limite de 191 caracteres!',
            'nickname.max' => 'O campo Nickname possui um limite de 100 caracteres!',
            'description.max' => 'O campo Descrição possui um limite de 1000 caracteres!',
            'games.required' => 'O campo Jogos é obrigatório!',
            'games.array' => 'O campo Jogos Precisa ser um Vetor!', //aprimorar apresentação!
            'email.max' => 'O campo E-mail possui um limite de 191 caracteres!',
            'external_profile.max' => 'O campo Perfil Externo possui um limite de 191 caracteres!'
        ];

        $request->validate($fieldsToValidate, $messagesIfFailsValidation);


        $playerSlug = $this->setSlug($request->name);
        DB::beginTransaction();
        try {

            $newPlayer = new Player();
            $newPlayer->name = $request->name;
            $newPlayer->slug = $playerSlug;
            $newPlayer->nickname = $request->nickname;
            $newPlayer->description = $request->description;
            $newPlayer->email = $request->email;
            $newPlayer->external_profile = $request->external_profile;

            if (!$newPlayer->save()) {
                return "Erro ao salvar registro!";
            }

            foreach ($request->games as $gameId) {
                $newLinkPlayerGame = new LinkPlayerGame();
                $newLinkPlayerGame->player_id = $newPlayer->id;
                $newLinkPlayerGame->game_id = $gameId;
                if (!$newLinkPlayerGame->save()) {
                    return "Erro ao salvar registro!";
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
        }

        return redirect()->action('PlayerController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player, $playerSlug)
    {
        $player = Player::with('link_player_game.game')->where('slug', $playerSlug)->first();

        if (!empty($player)) {
            return view('player.show')->with('player', $player);
        } else {
            return redirect()->action('PlayerController@index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player, $playerSlug)
    {
        $player = Player::with('link_player_game.game')->where('slug', $playerSlug)->first();
        $playerGamesIds = [];
        foreach ($player->link_player_game as $value) {
            $playerGamesIds[] = $value->game->id;
        };
        $games = Game::all();
        if (!empty($player)) {
            return view('player.edit')->with([
                'player' => $player,
                'games' => $games,
                'playerGamesIds' => $playerGamesIds
            ]);
        } else {
            return redirect()->action('PlayerController@index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player, $slug)
    {

        $fieldsToValidate =  [
            'name' => 'required|max:191',
            'nickname' => 'nullable|max:100',
            'description' => 'nullable|max:1000',
            'games' => 'required|array',
            'email' => 'nullable|max:191',
            'external_profile' => 'nullable|max:191',
        ];

        $messagesIfFailsValidation = [
            'name.required' => 'O campo Nome é obrigatório!',
            'name.max' => 'O campo Nome possui um limite de 191 caracteres!',
            'nickname.max' => 'O campo Nickname possui um limite de 100 caracteres!',
            'description.max' => 'O campo Descrição possui um limite de 1000 caracteres!',
            'games.required' => 'O campo Jogos é obrigatório!',
            'games.array' => 'O campo Jogos Precisa ser um Vetor!', //aprimorar apresentação!
            'email.max' => 'O campo E-mail possui um limite de 191 caracteres!',
            'external_profile.max' => 'O campo Perfil Externo possui um limite de 191 caracteres!'
        ];

        $request->validate($fieldsToValidate, $messagesIfFailsValidation);

        $player = Player::with('link_player_game.game')->where('slug', $slug)->first();

        if (!empty($player)) {
            $playerSlugRequest = Str::slug($request->name, '-');
            if ($playerSlugRequest == $player->slug) {
                $playerSlug = Str::slug($request->name, '-');
            } else {
                $playerSlug = $this->setSlug($request->name);
            }

            DB::beginTransaction();
            try {
                $player->name = $request->name;
                $player->slug = $playerSlug;
                $player->nickname = $request->nickname;
                $player->description = $request->description;
                $player->email = $request->email;
                $player->external_profile = $request->external_profile;

                if (!$player->save()) {
                    return "Erro ao salvar registro!";
                }

                LinkPlayerGame::where('player_id', $player->id)->delete();
                
                foreach ($request->games as $gameId) {
                    $newLinkPlayerGame = new LinkPlayerGame();
                    $newLinkPlayerGame->player_id = $player->id;
                    $newLinkPlayerGame->game_id = $gameId;
                    if (!$newLinkPlayerGame->save()) {
                        return "Erro ao salvar registro!";
                    }
                }
 
                DB::commit();
            } catch (\Exception $e) {
                return $e;
                DB::rollback();
            }
        }

        return redirect()->action('PlayerController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player, $slug)
    {
        $player = Player::where('slug', $slug)->first();

        if (!empty($player)) {
            DB::beginTransaction();
            try {
                if (!$player->delete()) {
                    return "Erro ao excluir registro!";
                }
                DB::commit();
            } catch (\Exception $e) {
                dd($e);
                DB::rollback();
            }
        }
    }

    private function setSlug($name)
    {

        $playerSlug = Str::slug($name, '-');
        $player = Player::all();
        $t = 0;
        foreach ($player as $player) {
            if (Str::slug($player->name, '-') === $playerSlug) {
                $t++;
            }
        }

        if ($t > 0) {
            $playerSlug = $playerSlug . '-' . $t;
        }

        return $playerSlug;
    }
}
