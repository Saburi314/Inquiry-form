@extends('layouts.base')

@section('title', '確認画面')

@section('content')
<form method="POST" action="{{ route('inquiry.send') }}" enctype='multipart/form-data'>
    @csrf
    <label>名前：</label>
      {{ $inputs['name'] }}
    <input name="name" value="{{ $inputs['name'] }}" type="hidden">
    <br>

    <label>メールアドレス：</label>
    {{ $inputs['email'] }}
    <input name="email" value="{{ $inputs['email'] }}" type="hidden">
    <br>

    <label>電話番号：</label>
    {{ $inputs['tel'] }}
    <input name="tel" value="{{ $inputs['tel'] }}" type="hidden">
    <br>

    <label>性別：</label>
    {{ $inputs['gender'] }}
    <input name="gender" value="{{ $inputs['gender'] }}" type="hidden">
    <br>

    <label>画像：</label>
    <br>
    @isset($inputs['image'])
    {{ $original_name }}
    <br>
    <img src="{{ asset('storage/' . $path) }}" width="100" height="100">
    <input name="path" value="{{ $path }}" type="hidden">
    @endisset
    <br>

    <label>お問い合わせ内容</label>
    <br>
    {!! nl2br(e($inputs['context'])) !!}
    <input name="context" value="{{ $inputs['context'] }}" type="hidden">
    <br>

    <button type="submit" name="action" value="back">入力内容修正</button>
    <button type="submit" name="action" value="submit">送信</button>
</form>
@endsection
