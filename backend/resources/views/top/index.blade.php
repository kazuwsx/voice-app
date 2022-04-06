@extends('layouts.app')

@section('content')

    <a href="/voice/create">音声を投稿</a>

    @foreach($voices as $voice)
        @include('top.card', ['voice' => $voice])
    @endforeach
@endsection
