<?php

namespace Ddd\Domain\User;

use Exception;

final class UserName{

    private $value;

    const MAX_LENGTH = 20;

    public function __construct(string $value) {
        if($value > self::MAX_LENGTH){
            throw new Exception('名前の文字数が20文字以上になっています。');
        }
        $this->value = $value;
    }

    public function get_user_id(): string
    {
        return $this->value;
    }

    public static function get_validation_rule(): Array {

        $validation_rule = [
            'required'
            ,'string'
            ,'max:' . self::MAX_LENGTH
        ];

        return $validation_rule;
    }
}
