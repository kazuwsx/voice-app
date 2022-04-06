<?php

namespace App\Http\Controllers\Voice;

use App\Http\Controllers\Controller;
use Ddd\Domain\Voice\VoiceId;
use Ddd\Usecase\Voice\VoiceDetailsUsecase;

class VoiceDetailsController extends Controller
{
    private $voice_id;

    // function __construct($id) {
    //     $this->voice_id = new VoiceId($id);
    // }
    public function __invoke($id) {
        $voice_details_usecase = new VoiceDetailsUsecase($id);
        $voice = $voice_details_usecase->execute();

        return view('voice.details.index', [
            'voice' => $voice
        ]);
    }
}
