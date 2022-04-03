<?php

namespace Ddd\Domain\Voice;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Voice\VoiceId;
use Ddd\Domain\Voice\VoiceUrl;
use Ddd\Domain\Voice\VoiceTitle;
use Ddd\Domain\Voice\VoicePlaybackTime;

final class VoiceEntity {
    private $id;
    private $title;
    private $playback_time;
    private $user_id;
    private $file_name;

    private function __construct(
        VoiceId $id,
        VoiceTitle $title,
        VoicePlaybackTime $playback_time,
        UserId $user_id,
        VoiceFileName $file_name
    ){
        $this->id = $id;
        $this->title = $title;
        $this->playback_time = $playback_time;
        $this->user_id = $user_id;
        $this->file_name = $file_name;
    }

    public function getId()
    {
        return $this->id->getValue();
    }

    public function getTitle()
    {
        return $this->title->getValue();
    }

    public function getPlayTimeMinuts()
    {
        return $this->playback_time->getMinuts();
    }

    public function getPlayTimeSeconds()
    {
        return $this->playback_time->getSeconds();
    }

    public function getFileName()
    {
        return $this->file_name->getValue();
    }

    public function getUserId()
    {
        return $this->user_id->getValue();
    }

    static function reconnstruct(
        VoiceId $id,
        VoiceTitle $title,
        VoicePlaybackTime $playback_time,
        UserId $user_id,
        VoiceFileName $file_name
    ):VoiceEntity {
        $voice = new VoiceEntity(
            $id,
            $title,
            $playback_time,
            $user_id,
            $file_name
        );
        return $voice;
    }

    static function create(
        VoiceId $id,
        VoiceTitle $title,
        VoicePlaybackTime $playback_time,
        UserId $user_id,
        VoiceFileName $file_name
    ):VoiceEntity {
        $voice = new VoiceEntity(
            $id,
            $title,
            $playback_time,
            $user_id,
            $file_name
        );
        return $voice;
    }
}
