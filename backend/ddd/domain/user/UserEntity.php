<?php

namespace Ddd\Domain\User;

use Ddd\Domain\User\UserId;

final class UserEntity {
    private $user_id;
    private $user_name;
    private $mail_address;

    private function __construct(
        UserId $user_id,
        string $user_name,
        string $mail_address
    )
    {
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->mail_address = $mail_address;
    }

    static function reconnstruct(
        UserId $user_id,
        string $user_name,
        string $mail_address
    ):UserEntity {
        $user = new UserEntity(
            $user_id,
            $user_name,
            $mail_address
        );
        return $user;
    }

    static function create(
        UserId $user_id,
        string $user_name,
        string $mail_address
    ): UserEntity {
        $user = new UserEntity(
            $user_id,
            $user_name,
            $mail_address
        );
        return $user;
    }
}
