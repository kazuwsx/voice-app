<?php

namespace Ddd\Domain\Voice;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Voice\VoiceId;
use Ddd\Domain\Voice\VoiceUrl;
use Ddd\Domain\Voice\VoiceTitle;
use Ddd\Domain\Voice\VoicePlaybackTime;

final class VoiceEntity {
    private $voice_id;
    private $voice_title;
    private $voice_playback_time;
    private $user_id;
    private $voice_file_name;

    private function __construct(
        VoiceId $voice_id,
        VoiceTitle $voice_title,
        VoicePlaybackTime $voice_playback_time,
        UserId $user_id,
        VoiceFileName $voice_file_name
    ){
        $this->voice_id = $voice_id;
        $this->voice_title = $voice_title;
        $this->voice_playback_time = $voice_playback_time;
        $this->user_id = $user_id;
        $this->voice_file_name = $voice_file_name;
    }

    public function getVoiceId()
    {
        return $this->voice_id->getValue();
    }

    public function getVoiceTitle()
    {
        return $this->voice_title->getValue();
    }

    public function getVoicePlayTimeMinuts()
    {
        return $this->voice_playback_time->getMinuts();
    }

    public function getVoicePlayTimeSeconds()
    {
        return $this->voice_playback_time->getSeconds();
    }

    public function getVoiceFileName()
    {
        return $this->voice_file_name->getValue();
    }

    static function reconnstruct(
        VoiceId $voice_id,
        VoiceTitle $voice_title,
        VoicePlaybackTime $voice_playback_time,
        UserId $user_id,
        VoiceFileName $voice_file_name
    ):VoiceEntity {
        $voice = new VoiceEntity(
            $voice_id,
            $voice_title,
            $voice_playback_time,
            $user_id,
            $voice_file_name
        );
        return $voice;
    }

    static function create(
        VoiceId $voice_id,
        VoiceTitle $voice_title,
        VoicePlaybackTime $voice_playback_time,
        UserId $user_id,
        VoiceFileName $voice_file_name
    ):VoiceEntity {
        $voice = new VoiceEntity(
            $voice_id,
            $voice_title,
            $voice_playback_time,
            $user_id,
            $voice_file_name
        );
        return $voice;
    }
}
