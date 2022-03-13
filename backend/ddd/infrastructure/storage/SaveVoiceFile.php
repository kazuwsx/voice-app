<?PHP

namespace Ddd\Infrastructure\Storage\SaveVoiceFile;

class SaveVoiceFile {
    public function save($file){
        Storage::disk('local')->put($file, 'Contents');
    }
}
