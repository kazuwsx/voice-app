@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <a href="/voice/create">音声を投稿</a>
    @foreach($voice_entities as $voice_entity)
        <p>{{ $voice_entity->getVoiceTitle() }}</p>
        <p>{{ $voice_entity->getVoicePlayTimeMinuts() }}分</p>
        <audio controls src="{{ asset( 'storage/voice/' . $voice_entity->getVoiceFileName()) }}" ></audio>
    @endforeach
</div>
@endsection
