<?php

namespace Ddd\Domain\Voice;

final class VoicePlaybackTime{

    private $minuts;
    private $seconds;

    public function __construct(int $minuts, int $seconds) {

        $voice_playback_time_minuts = new VoicePlaybackTimeMinuts($minuts);

        $voice_playback_time_seconds = new VoicePlaybackTimeSeconds($seconds);

        $this->minuts = $voice_playback_time_minuts;
        $this->seconds = $voice_playback_time_seconds;
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

final class VoicePlaybackTimeMinuts {
    public function __construct(int $value) {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}

final class VoicePlaybackTimeSeconds {
    public function __construct(int $value) {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
