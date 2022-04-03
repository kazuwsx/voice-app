@extends('layouts.app')

@section('content')

    <a href="/voice/create">音声を投稿</a>

    @foreach($voices as $voice)
        <p>{{ $voice->title }}</p>
        <p>{{ $voice->playback_time_minuts }}分</p>
        <a href="/voice/{{$voice->id }}">ここをクリック</a>
    @endforeach
@endsection
