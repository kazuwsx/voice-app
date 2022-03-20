<?php

namespace Ddd\Domain\Voice;

use Exception;

use function PHPUnit\Framework\throwException;

final class VoiceFileName{

    private $value;
    const ALLOWED_EXTENTIONS = ['mp3'];

    public function __construct(string $value) {
        if(
            !in_array(
                pathinfo($value, PATHINFO_EXTENSION),
                self::ALLOWED_EXTENTIONS
            )
        ) {
            throw new Exception('許可された拡張子以外のファイルが投稿されました。');
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
