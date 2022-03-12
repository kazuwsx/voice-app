<?php

namespace Ddd\Domain\User;

use Exception;

final class UserName{

    private $value;

    const MAX_LENGTH = 255;

    public function __construct(string $value) {
        if($value > self::MAX_LENGTH){
            throw new Exception('メールアドレスの文字数が255文字以上になっています。');
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
            ,'email:rfc,dns,strict,spoof'
            ,'max:' . self::MAX_LENGTH
            ,'unique:users'
    ];

        return $validation_rule;
    }
}
