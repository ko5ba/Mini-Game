<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\ResultGames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    private $namePlayer = 'Player';
    
    public function game()
    {
        return view('app.game');
    }

    public function play(Request $request)
    {
        $computerChoice = rand(1, 3);

        if($computerChoice === 1) {
            $computerChoice = 'rock';
        } elseif($computerChoice === 2) {
            $computerChoice = 'paper';
        } else {
            $computerChoice = 'scissors';
        }
        
        $playerChoice = $request->input('player_choice'); 

        if($playerChoice === $computerChoice) {
            $result = 'Ничья';
        } 
        elseif(($playerChoice === 'rock' and  $computerChoice === 'scissors') or ($playerChoice === 'paper' and $computerChoice === 'rock') or ($playerChoice === 'scissors' or $computerChoice === 'paper')) {
            $result = 'Победа';
        } else {
            $result = 'Поражение';
        }

        DB::table('result_games')->insert([
            'name_player' => $this->namePlayer,
            'player_choice' => $playerChoice,
            'computer_choice' => $computerChoice,
            'result_game' => $result
        ]);

        return view('app.game', compact('result'));
        
    }
}
