<?php

namespace Ddd\Domain\Voice;

use Exception;

final class VoiceTime{

    private $value;

    public function __construct(int $value) {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
