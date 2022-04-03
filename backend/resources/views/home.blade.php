@extends('layouts.app')

@section('content')
    @if (session('status'))

    {{ session('status') }}

    @endif

    {{ __('You are logged in!') }}
@endsection
