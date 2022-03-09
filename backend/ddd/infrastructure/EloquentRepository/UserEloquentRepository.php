<?php
namespace Ddd\Infrastructure\EloquentRepository;

use Ddd\Domain\User\UserRepository;
use Illuminate\Support\Facades\DB;

class UserEloquentRepository implements UserRepository{

    public function selectAll(){
        $results = DB::table('user')->get();
        return $results;
    }
}
