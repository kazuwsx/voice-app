<?php

namespace Ddd\Domain\Voice;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Voice\Title;
use Ddd\Domain\Voice\Time;
use Ddd\Domain\Voice\Url;

final class VoiceEntity {
    private $title;
    private $time;
    private $url;
    private $user_id;
    private $voice_file;

    private function __construct(
        Title $title,
        Time $time,
        Url $url,
        UserId $user_id
    )
    {
        $this->title = $title;
        $this->time = $time;
        $this->url = $url;
    }

    static function reconnstruct(
        Title $title,
        Time $time,
        Url $url,
        UserId $user_id
    ):VoiceEntity {
        $voice = new VoiceEntity(
            $title,
            $time,
            $url,
            $user_id
        );
        return $voice;
    }

    static function create(
        Title $title,
        UserId $user_id,
        VoiceFile $voice_file
    ):VoiceEntity {

        

        $voice = new VoiceEntity(
            $title,
            $time,
            $url,
            $user_id
        );
        return $voice;
    }
}
