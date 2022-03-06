<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ddd\Domain\User\User;

class UserController extends Controller
{
    public function index() {
        $user = User::create('kazuki', 'kazu@mail');
        dd($user);
    }
}
