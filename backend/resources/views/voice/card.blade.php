<div class="card">
    <div class="card-content">
        <div class="content">
            <strong>{{ $voice->title }}</strong>
            <p>再生時間 {{ $voice->playback_time_minuts }}分</p>
            <br><br>
            <audio controls src="{{ asset( 'storage/voice/' . $voice->file_name) }}" ></audio>
        </div>
    </div>
</div>
