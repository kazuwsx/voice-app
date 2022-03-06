<?php

namespace Ddd\Domain\User;

use Ddd\Domain\User\UserId;

final class User {
    private $user_id;
    private $user_name;
    private $mail_address;

    private function __construct(
        string $user_id,
        string $user_name,
        string $mail_address
    )
    {
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->mail_address = $mail_address;
    }


    static function create(
        string $user_name,
        string $mail_address
    ): User {
        $user = new User(
            'aiueo',
            $user_name,
            $mail_address
        );

        return $user;
    }

}
