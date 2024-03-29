<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Ddd\Domain\User\UserEntity;
use Ddd\Domain\User\UserId;
use Ddd\Infrastructure\EloquentRepository\UserEloquentRepository;
use App\Http\Controllers\Controller;

class UserIndexController extends Controller
{
    public function __invoke() {
        $userEloquentRepository = new UserEloquentRepository();
        $results = $userEloquentRepository->selectAll();
        $user_id = new UserId('afdafdawfewafaa');

        $user = UserEntity::reconnstruct(
            $user_id,
            $results->name,
            $results->email,
        );
    }
}
