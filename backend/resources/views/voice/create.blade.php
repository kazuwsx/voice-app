@extends('layouts.app')

@section('content')
<form method="POST" action="/voice/save" enctype="multipart/form-data">

    {{ csrf_field() }}

    <p>タイトル</p>
    <input type="text" id="title" name="title">
    <p>音声ファイル</p>
    <input type="file" id="voice_file" name="voice_file">
    <button type="submit">保存</button>

</form>
@endsection
