<?php

namespace Ddd\Domain\Voice;

use Ddd\Domain\Voice\VoiceEntity;

class VoiceDto {

    public $id;
    public $title;
    public $playback_time_minuts;

    function __construct(VoiceEntity $voice)
    {
        $this->title = $voice->getTitle();
        $this->id = $voice->getId();
        $this->playback_time_minuts = $voice->getPlayTimeMinuts();
    }
}
