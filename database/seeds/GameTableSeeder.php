<?php

use App\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [
            [
                "id" => 1,
                "title" => "Counter-Strike: Global Offensive",
                "slug" => Str::slug("Counter-Strike: Global Offensive", "-"),
                "abbreviation" => "CSGO",
                "description" => "Counter-Strike: Global Offensive é um jogo online desenvolvido pela Valve Corporation e pela Hidden Path Entertainment, sendo uma sequência de Counter-Strike: Source. É o quarto título principal da franquia.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 2,
                "title" => "League of Legends",
                "slug" => Str::slug("League of Legends", "-"),
                "abbreviation" => "LOL",
                "description" => "League of Legends é um jogo eletrônico online gratuito, do gênero batalha multijogador, desenvolvido e publicado pela Riot Games em 2009, para os sistemas Microsoft Windows e Mac OS X, inspirado no modo Defense of the Ancients do jogo Warcraft III: The Frozen Throne.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 3,
                "title" => "Fortnite",
                "slug" => Str::slug("Fortnite", "-"),
                "abbreviation" => "FORT",
                "description" => "Fortnite é um jogo eletrônico multijogador online revelado originalmente em 2011, desenvolvido pela Epic Games e lançado como diferentes modos de jogo que compartilham a mesma jogabilidade e motor gráfico de jogo.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 4,
                "title" => "Valorant",
                "slug" => Str::slug("Valorant", "-"),
                "abbreviation" => "VAL",
                "description" => "Valorant é um jogo eletrônico multijogador gratuito para jogar de tiro em primeira pessoa desenvolvido e publicado pela Riot Games.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 5,
                "title" => "Dota 2",
                "slug" => Str::slug("Dota 2", "-"),
                "abbreviation" => "DOTA2",
                "description" => "Dota 2 é um jogo eletrônico gratuito do gênero batalha multijogador, desenvolvido pela produtora Valve Corporation como sequência do Defense of the Ancients, lançado em julho de 2013 na plataforma Steam.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 6,
                "title" => "Free Fire",
                "slug" => Str::slug("Free Fire", "-"),
                "abbreviation" => "FF",
                "description" => "Garena Free Fire é um jogo eletrônico mobile de ação-aventura do gênero battle royale, desenvolvido pela desenvolvedora vietnamita 111dots Studio e publicado pela Garena. O jogo obteve um beta aberto em novembro de 2017 e foi lançado oficialmente para Android de iOS em 4 de dezembro de 2017.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 7,
                "title" => "Rainbow Six Siege",
                "slug" => Str::slug("Rainbow Six Siege", "-"),
                "abbreviation" => "RB6",
                "description" => "Tom Clancy's Rainbow Six Siege é um videojogo do género first person shooter produzido pela Ubisoft Montreal. Foi anunciado pela Ubisoft a 9 de Junho de 2014 na Electronic Entertainment Expo 2014 onde foi muito aplaudido pela crítica. Foi lançado para Xbox One, PlayStation 4 e para Microsoft Windows.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 8,
                "title" => "Call of Duty: Warzone",
                "slug" => Str::slug("Call of Duty: Warzone", "-"),
                "abbreviation" => "CODWZ",
                "description" => "Call of Duty: Warzone é um jogo eletrônico free-to-play do gênero battle royale desenvolvido pela Infinity Ward e Raven Software e publicado pela Activision. Lançado em 10 de março de 2020 para Microsoft Windows, PlayStation 4 e Xbox One, o jogo faz parte do título Call of Duty: Modern Warfare, mas não requer compra.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 9,
                "title" => "Hearthstone",
                "slug" => Str::slug("Hearthstone", "-"),
                "abbreviation" => "HS",
                "description" => "Hearthstone, originalmente conhecido como Hearthstone: Heroes of Warcraft, é um jogo de cartas estratégico on-line desenvolvido e publicado pela empresa Blizzard Entertainment. É o primeiro jogo da empresa gratuito e também o primeiro a ser lançado para plataformas móveis.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 10,
                "title" => "StarCraft",
                "slug" => Str::slug("StarCraft", "-"),
                "abbreviation" => "SC",
                "description" => "StarCraft é uma franquia de ficção científica militar criada por Chris Metzen e James Phinney, e de propriedade da Blizzard Entertainment.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
    
            [
                "id" => 11,
                "title" => "Playerunknown's Battlegrounds",
                "slug" => Str::slug("Playerunknown's Battlegrounds", "-"),
                "abbreviation" => "PUBG",
                "description" => "Traduzido do inglês-O Battlegrounds da PlayerUnknown é um jogo de batalha real multiplayer online desenvolvido e publicado pela PUBG Corporation, uma subsidiária da empresa de videogame sul-coreana Bluehole.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],

            [
                "id" => 12,
                "title" => "FIFA 21",
                "slug" => Str::slug("FIFA 21", "-"),
                "abbreviation" => "FIFA21",
                "description" => "FIFA 21 é um videogame de simulação de esportes desenvolvido e publicado pela Electronic Arts, tendo como estrela da capa o jogador Kylian Mbappé. O jogo foi anunciado em 19 de junho de 2020, sendo, no mesmo ano, oficialmente publicado no dia 9 de outubro.",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                //"deleted_at" => null,
            ],
        ];
        Game::insert($games);
    }
}
