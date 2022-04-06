<?php

namespace App\Http\Controllers;

use Ddd\Domain\Voice\VoiceDto;
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
        $voices = $top_usecase->execute();

        return view('top.index', [
            'voices' => $voices,
        ]);
    }
}
