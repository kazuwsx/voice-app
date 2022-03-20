<?php
namespace Ddd\Usecase;

use Ddd\Infrastructure\EloquentRepository\EloquentVoiceRepository;

class TopUsecase{
    // private $eloquent_voice_repository;

    // public function __construct(
    //     EloquentVoiceRepository $eloquent_voice_repository
    // )
    // {
    //     $this->eloquent_voice_repository = $eloquent_voice_repository;
    // }

    function execute()
    {
        $eloquent_voice_repository = new EloquentVoiceRepository();
        $voice_entities = $eloquent_voice_repository->selectAllOrderByCreatedAtLimit10();
        return $voice_entities;
    }
}
