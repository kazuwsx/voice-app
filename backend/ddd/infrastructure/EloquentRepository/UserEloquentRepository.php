<?php
namespace Ddd\Infrastructure\EloquentRepository;

use Ddd\Domain\User\UserRepository;
use Illuminate\Support\Facades\DB;

class EloquentVoiceRepository implements UserRepository {

    public function selectAll(){
        $results = DB::table('users')
            ->select('id','name','email')
            ->first();
        return $results;
    }
}
