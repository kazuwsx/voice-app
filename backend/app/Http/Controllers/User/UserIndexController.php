<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Ddd\Domain\User\User;
use Ddd\Domain\User\UserId;
use Ddd\Infrastructure\EloquentRepository\UserEloquentRepository;
use App\Http\Controllers\Controller;

class UserIndexController extends Controller
{
    public function __invoke() {
        $userEloquentRepository = new UserEloquentRepository();
        dd($userEloquentRepository->selectAll());
    }
}
