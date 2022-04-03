<?php

namespace Ddd\Domain\Voice;

use Ddd\Domain\Voice\VoiceEntity;

class VoiceDto {

    public $id;
    public $title;
    public $playback_time_minuts;

    function __construct(VoiceEntity $voiceEntity)
    {
        $this->title = $voiceEntity->getVoiceTitle();
        $this->id = $voiceEntity->getVoiceId();
        $this->playback_time_minuts = $voiceEntity->getVoicePlayTimeMinuts();
    }
}
