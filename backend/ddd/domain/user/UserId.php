<?php

namespace Ddd\Domain\User;

use Ramsey\Uuid\Uuid;

final class UserId{

    private $value;

    private function __constractore(int $value){
        dd($value);
        $this->value = $value;
    }
}
