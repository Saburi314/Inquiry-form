@extends('layouts.base')

@section('title', '確認画面')

@section('content')
<form method="POST" action="{{ route('inquiry.send') }}" enctype='multipart/form-data'>
    @csrf
    <table>
        <tbody>
        <!-- 名前 -->
        <tr>
            <th><label for="name">名前：</label></th>
                <td>{{ $inputs['name'] }}</td>
            <input name="name" value="{{ $inputs['name'] }}" type="hidden">
        </tr>
        <!-- メールアドレス -->
        <tr>
            <th><label for="email">メールアドレス：</label></th>
            <td>{{ $inputs['email'] }}</td>
            <input name="email" value="{{ $inputs['email'] }}" type="hidden">
        </tr>
        <!-- 電話番号 -->
        <tr>
            <th><label for="tel">電話番号：</label></th>
            <td>{{ $inputs['tel'] }}</td>
            <input name="tel" value="{{ $inputs['tel'] }}" type="hidden">
        </tr>
        <!-- 性別 -->
        <tr>
            <th><label for="gender">性別：</label></th>
            <td>{{ $inputs['gender'] }}</td>
            <input name="gender" value="{{ $inputs['gender'] }}" type="hidden">
        </tr>
        <!-- 性別 -->
        <tr>
            <th><label for="image">画像：</label></th>
            @isset($inputs['image'])
                <td><img src="{{ asset('storage/' . $path) }}" width="100" height="100"></td>
                <input name="path" value="{{ $path }}" type="hidden">
            @endisset
        </tr>
        <!-- お問い合わせ内容 -->
        <tr>
            <th><label for="context">問い合わせ内容：</label></th>
            <td>{!! nl2br(e($inputs['context'])) !!}</td>
            <input name="context" value="{{ $inputs['context'] }}" type="hidden">
        </tr>
        <!-- 送信ボタン -->
        <tr>
            <td><button type="submit" class="submit" name="action" value="back">入力内容修正</button></td>
            <td><button type="submit" class="submit" name="action" value="submit">送信</button></td>
        </tr>
        </tbody>
    </table>
</form>
@endsection
