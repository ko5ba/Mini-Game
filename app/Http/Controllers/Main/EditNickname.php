<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\ResultGames;
use Illuminate\Http\Request;

class EditNickname extends Controller
{
    public function edit()
    {
        return view('app.editNickname');
    }

    public function update(UpdateRequest $request, ResultGames $model)
    {
        $model->update($request->validated());
        return to_route('welcome');
    }
}
