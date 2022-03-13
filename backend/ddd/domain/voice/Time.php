<?php

namespace Ddd\Domain\Voice;

use Exception;

final class Time{

    private $value;

    const MAX_LENGTH = 50;

    public function __construct(string $value) {
        if($value > self::MAX_LENGTH){
            throw new Exception('タイトルの文字数が50文字以上になっています。');
        }
        $this->value = $value;
    }

    public function get_user_id(): string
    {
        return $this->value;
    }
}
