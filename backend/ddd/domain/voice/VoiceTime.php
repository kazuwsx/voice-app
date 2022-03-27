<?php

namespace Ddd\Domain\Voice;

use Exception;

final class VoiceTime{

    private $minuts;
    private $seconds;

    public function __construct(int $minuts, int $seconds) {

        $voice_play_time_minuts = new VoicePlayTimeMinuts($minuts);

        $voice_play_time_seconds = new VoicePlayTimeSeconds($seconds);

        $this->minuts = $voice_play_time_minuts;
        $this->seconds = $voice_play_time_seconds;
    }

    public function getMinuts(): int
    {
        return $this->minuts->getValue();
    }

    public function getSeconds(): int
    {
        return $this->seconds->getValue();
    }
}

final class VoicePlayTimeMinuts {
    public function __construct(int $value) {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}

final class VoicePlayTimeSeconds {
    public function __construct(int $value) {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
