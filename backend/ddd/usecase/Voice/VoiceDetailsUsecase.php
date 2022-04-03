<?php
namespace Ddd\Usecase\Voice;


use Ddd\Domain\Voice\VoiceId;
use Ddd\Domain\Voice\VoiceDto;
use Ddd\Infrastructure\EloquentRepository\EloquentVoiceRepository;

class VoiceDetailsUsecase{

    private $voice_id;
    private $eloquent_voice_repository;

    function __construct(
        int $voice_id
    ) {
        $this->voice_id = new VoiceId($voice_id);
        $this->eloquent_voice_repository = new EloquentVoiceRepository();
    }

    function execute(){

        $voice_entity = $this->eloquent_voice_repository->selectAllWhereIdFirst($this->voice_id);
        return new VoiceDto($voice_entity);
    }
}
