<?php

namespace App\Http\Controllers\Voice;

use App\Http\Controllers\Controller;

class VoiceDetailsController extends Controller
{
    public function __invoke($id) {
        dd($id);

        return view('voice.create');
    }
}
