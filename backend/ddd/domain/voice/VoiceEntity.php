<?php

namespace Ddd\Domain\Voice;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Voice\VoiceTitle;
use Ddd\Domain\Voice\VoiceTime;
use Ddd\Domain\Voice\VoiceUrl;

final class VoiceEntity {
    private $voice_title;
    private $voice_time;
    private $user_id;
    private $voice_file_name;

    private function __construct(
        VoiceTitle $voice_title,
        VoiceTime $voice_time,
        UserId $user_id,
        VoiceFileName $voice_file_name
    ){
        $this->voice_title = $voice_title;
        $this->voice_time = $voice_time;
        $this->voice_file_name = $voice_file_name;
    }

    public function getVoiceTitle()
    {
        return $this->voice_title->getValue();
    }

    public function getVoicePlayTimeMinuts()
    {
        return $this->voice_time->getMinuts();
    }

    public function getVoicePlayTimeSeconds()
    {
        return $this->voice_time->getSeconds();
    }

    public function getVoiceFileName()
    {
        return $this->voice_file_name->getValue();
    }

    static function reconnstruct(
        VoiceTitle $voice_title,
        VoiceTime $voice_time,
        UserId $user_id,
        VoiceFileName $voice_file_name
    ):VoiceEntity {
        $voice = new VoiceEntity(
            $voice_title,
            $voice_time,
            $user_id,
            $voice_file_name
        );
        return $voice;
    }

    static function create(
        VoiceTitle $voice_title,
        VoiceTime $voice_time,
        UserId $user_id,
        VoiceFileName $voice_file_name
    ):VoiceEntity {
        $voice = new VoiceEntity(
            $voice_title,
            $voice_time,
            $user_id,
            $voice_file_name
        );
        return $voice;
    }
}
