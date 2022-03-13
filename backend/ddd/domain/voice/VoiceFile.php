<?php

namespace Ddd\Domain\Voice;

use Exception;

use function PHPUnit\Framework\throwException;

final class VoiceFile{

    private $value;
    const ALLOWED_EXTENTIONS = ['mp3'];

    public function __construct(string $value) {
        if(pathinfo($value, PATHINFO_EXTENSION) !== ALLOWED_EXTENTIONS) {
            throw new Exception('許可された拡張子以外のファイルが投稿されました。');
        }
        $this->value = $value;
    }

    public function get_url(): string
    {
        return $this->value;
    }
}
