<?php
namespace Ddd\Infrastructure\EloquentRepository;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Voice\VoicePlaybackTime;
use Ddd\Domain\Voice\VoiceTitle;
use Ddd\Domain\Voice\VoiceEntity;
use Illuminate\Support\Facades\DB;
use Ddd\Domain\Voice\VoiceFileName;
use Ddd\Domain\Voice\VoiceRepository;

class EloquentVoiceRepository implements VoiceRepository {
    function insert(
        VoiceTitle $voice_title,
        VoicePlaybackTime $voice_playback_time,
        VoiceFileName $voice_file_name,
        UserId $user_id
    ){
        $sql = 'insert into voices (title, playback_time_minuts, playback_time_seconds, file_name, user_id) values (?,?,?,?,?)';
        DB::insert($sql, [
            $voice_title->getValue(),
            $voice_playback_time->getMinuts(),
            $voice_playback_time->getSeconds(),
            $voice_file_name->getValue(),
            $user_id->getValue(),
        ]);
    }

    function selectAllOrderByCreatedAtLimit10()
    {
        $voice_records = DB::table('voices')
            ->orderByDesc('created_at')
            ->limit(10)
            ->get();

        $voice_entities = self::mapRecordsToEntity($voice_records);

        return $voice_entities;
    }

    private function mapRecordToEntity($voice_record): VoiceEntity
    {
        return VoiceEntity::reconnstruct(
            $voice_title = new VoiceTitle($voice_record->title),
            $voice_time = new VoicePlaybackTime(
                $voice_record->playback_time_minuts,
                $voice_record->playback_time_minuts,
            ),
            $user_id = new UserId($voice_record->user_id),
            $voice_file_name = new VoiceFileName($voice_record->file_name),
        );
    }

    private function mapRecordsToEntity($voice_records): Array
    {
        $voice_entities = [];

        foreach($voice_records as $voice_record)
        {
            array_push($voice_entities, self::mapRecordToEntity($voice_record));
        }

        return $voice_entities;
    }
}
