<?php

namespace Ddd\Domain\Voice;

use Exception;

final class Title{

    private $value;

    const MAX_LENGTH = 50;

    public function __construct(string $value) {
        if(strlen($value) > self::MAX_LENGTH){
            throw new Exception('タイトルの文字数が50文字以上になっています。');
        }
        $this->value = $value;
    }

    public function get_title(): string
    {
        return $this->value;
    }
}
