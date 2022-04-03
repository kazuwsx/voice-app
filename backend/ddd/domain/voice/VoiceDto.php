<?php

namespace Ddd\Domain\Voice;

use Ddd\Domain\Voice\VoiceEntity;

class VoiceDto {

    public $id;
    public $title;
    public $playback_time_minuts;
    public $playback_time_seconds;
    public $user_id;
    public $file_name;

    function __construct(VoiceEntity $voice)
    {
        $this->title = $voice->getTitle();
        $this->id = $voice->getId();
        $this->playback_time_minuts = $voice->getPlayTimeMinuts();
        $this->playback_time_seconds = $voice->getPlayTimeSeconds();
        $this->user_id = $voice->getUserId();
        $this->file_name = $voice->getFileName();
    }
}
