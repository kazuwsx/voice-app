<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Ddd\Usecase\TopUsecase;

class TopController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $top_usecase = new TopUsecase();
        $voice_entities = $top_usecase->execute();
        return view('top', [
            'voice_entities' => $voice_entities,
        ]);
    }
}
