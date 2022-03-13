<?php

namespace App\Http\Controllers\Voice;

use App\Http\Controllers\Controller;

class VoiceCreateController extends Controller
{
    public function __invoke() {
        return view('voice.create');
    }
}
