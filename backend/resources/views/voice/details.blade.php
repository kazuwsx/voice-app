@extends('layouts.app')

@section('content')
<h1>{{ $voice->title }}</h1>
<p>再生時間：{{ $voice->playback_time_minuts . '分' . $voice->playback_time_seconds . '秒' }}</p>
<audio controls src="{{ asset( 'storage/voice/' . $voice->file_name) }}" ></audio>
@endsection
