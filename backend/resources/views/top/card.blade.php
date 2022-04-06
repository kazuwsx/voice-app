<div class="card">
    <div class="card-content">
        <div class="content">
            <strong>{{ $voice->title }}</strong>
            <p>再生時間 {{ $voice->playback_time_minuts }}分</p>
        </div>
        <div class="card-footer">
            <div class="buttons">
                <div class="button is-primary is-outlined">
                    <a href="/voice/{{$voice->id }}">詳しく見る</a>
                </div>
            </div>
        </div>
    </div>
</div>
