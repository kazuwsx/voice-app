<?php
namespace Ddd\Usecase\Voice;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Voice\VoiceTime;
use Ddd\Domain\Voice\VoiceTitle;
use Ddd\Domain\Voice\VoiceFileName;
use Ddd\Infrastructure\EloquentRepository\EloquentVoiceRepository;
use Illuminate\Support\Facades\Storage;
use Owenoj\LaravelGetId3\GetId3;

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

        $file = Storage::get($stored_file_path);
        $stored_file_name = str_replace('public/voice/', '', $stored_file_path);
        $voice_file_name = new VoiceFileName($stored_file_name);
        $eloquent_voice_repository = new EloquentVoiceRepository();

        $get_id3 = new getID3($this->voice_file);
        $get_id3_extract_info_playtime_string = $get_id3->extractInfo()['playtime_string'];

        $colon_point = strpos($get_id3_extract_info_playtime_string, ':');
        $minuts = substr($get_id3_extract_info_playtime_string, 0, $colon_point);
        $minuts_to_int = intval($minuts);

        $seconds = substr($get_id3_extract_info_playtime_string, $colon_point + 1);
        $seconds_to_int = intval($seconds);

        $voice_time = new VoiceTime($minuts_to_int, $seconds_to_int);

        $eloquent_voice_repository->insert(
            $this->voice_title,
            $voice_time,
            $voice_file_name,
            $this->user_id,
        );
    }
}
