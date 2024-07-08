<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultGames extends Model
{
    use HasFactory;

    protected $fillable = ['name_player'];
    protected $table = 'result_games';
}
