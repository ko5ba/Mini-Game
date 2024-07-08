<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\ResultGames;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function welcome()
    {
        return view('app.welcome');
    }

    public function gamesResults(ResultGames $game)
    {
        $games = ResultGames::all();
        return view('app.results', compact('games'));
    }
}
