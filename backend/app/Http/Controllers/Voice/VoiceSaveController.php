<?php

namespace App\Http\Controllers\Voice;

use App\Http\Controllers\Controller;
use Ddd\Domain\User\UserId;
use Ddd\Domain\Voice\VoiceFileName;
use Ddd\Domain\Voice\VoiceTitle;
use Ddd\Usecase\Voice\VoiceSaveUsecase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoiceSaveController extends Controller
{

    public function __invoke(Request $request) {

        $voice_title = new VoiceTitle($request->input('title'));
        $voice_file_name = new VoiceFileName($request->voice_file->getClientOriginalName());
        $user_id = new UserId(Auth::id());
        $voice_save_usecase = new VoiceSaveUsecase(
            $request->file('voice_file'),
            $voice_file_name,
            $voice_title,
            $user_id
        );
        $voice_save_usecase->execute();

        return view('voice.save');
    }
}
