<?php

namespace Ddd\Domain\User;

use Ramsey\Uuid\Uuid;

final class UserId{

    private $value;

    public function __construct(string $value) {
        $this->value = $value;
    }

    public function get_user_id(): string
    {
        return $this->value;
    }
}
