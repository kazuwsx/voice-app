<?php

namespace Ddd\Domain\Voice;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Voice\VoiceTime;
use Ddd\Domain\Voice\VoiceTitle;
use Ddd\Domain\Voice\VoiceFileName;

interface VoiceRepository {
    function insert(
        VoiceTitle $voice_title,
        VoiceTime $voice_time,
        VoiceFileName $voice_file_name,
        UserId $user_id
    );

    function selectAllOrderByCreatedAtLimit10();
}
