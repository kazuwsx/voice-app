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
        $voice_entities = $top_usecase->execute();
        $voices = [];
        foreach($voice_entities as $voice_entity){
            $voice = new VoiceDto($voice_entity);
            array_push($voices, $voice);
        }

        return view('top', [
            'voices' => $voices,
        ]);
    }
}
