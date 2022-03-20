<?php
namespace Ddd\Usecase\Voice;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Voice\Title;
use Ddd\Domain\Voice\VoiceTime;
use Ddd\Domain\Voice\VoiceTitle;
use Ddd\Domain\Voice\VoiceEntity;
use Ddd\Domain\Voice\VoiceFileName;

use Illuminate\Support\Facades\Auth;
use Ddd\Infrastructure\EloquentRepository\EloquentVoiceRepository;

class VoiceSaveUsecase{

    private $voice_file;
    private $voice_title;
    private $voice_file_name;
    private $user_id;

    function __construct(
        $voice_file,
        VoiceFileName $voice_file_name,
        VoiceTitle $voice_title,
        UserId $user_id
    ) {
        $this->voice_file = $voice_file;
        $this->voice_file_name = $voice_file_name;
        $this->voice_title = $voice_title;
        $this->user_id = $user_id;
    }

    function execute(){
        $stored_file_path = $this->voice_file->store('public/voice');
        $stored_file_name = str_replace('voice/public/', '', $stored_file_path);
        $voice_file_name = new VoiceFileName($stored_file_name);
        $voice_time = new VoiceTime(100);
        $voice_eloquent_repository = new EloquentVoiceRepository();

        $voice_eloquent_repository->insert(
            $this->voice_title,
            $voice_time,
            $voice_file_name,
            $this->user_id,
        );
    }
}
