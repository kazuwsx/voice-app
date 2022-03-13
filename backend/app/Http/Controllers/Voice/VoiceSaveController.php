<?php

namespace App\Http\Controllers\Voice;

use App\Http\Controllers\Controller;
use Ddd\Usecase\Voice\VoiceSaveUsecase;
use Illuminate\Http\Request;

class VoiceSaveController extends Controller
{
    public function __invoke(Request $request) {
        $voice_file =
        $voice_save_usecase = new VoiceSaveUsecase(
            $request->file('voice_file'),
            $request->input('title'),
        );
    }
}
