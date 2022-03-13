<?php
namespace Ddd\Usecase\Voice;

use Ddd\Domain\Voice\Title;

class VoiceSaveUsecase{

    private $voice_file;
    private $title;

    function __construct($voice_file, Title $title) {
        $this->voice_file = $voice_file;
        $this->title = $title;
    }
    function execute(){
        $this->voice_file->store('voice');
    }
}
