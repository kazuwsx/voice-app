<?php

namespace App\Http\Controllers\Voice;

use App\Http\Controllers\Controller;
use Ddd\Domain\Voice\Title;
use Ddd\Usecase\Voice\VoiceSaveUsecase;
use Illuminate\Http\Request;

class VoiceSaveController extends Controller
{

    public function __invoke(Request $request) {

        $title = new Title($request->input('title'));
        $voice_save_usecase = new VoiceSaveUsecase(
            $request->file('voice_file'),
            $title,
        );
        $voice_save_usecase->execute();
    }
}
