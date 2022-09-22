@extends('layouts.base')

@section('title', '問い合わせ画面')

@section('content')
<h1>お問い合わせ</h1>

<form method="POST" action="{{ route('inquiry.confirm') }}" enctype='multipart/form-data' name="inquiry_form">
    @csrf
    <table>
        <tbody>
        <!-- 名前 -->
        <tr>
            <th></th>
            <td class="err-msg-name">
                @if ($errors->has('name'))
                    {{$errors->first('name')}}
                @endif
            </td>
        </tr>
        <tr>
            <th><label for="name">名前</label></th>
            <td><input type="text" name="name" id="name"  value="{{ old('name') }}" placeholder="〇〇〇　〇〇"></td>
        </tr>
        <!-- メールアドレス -->
        <tr>
            <th></th>
            <td class="err-msg-email">
                @if ($errors->has('email'))
                    {{$errors->first('email')}}
                @endif
            </td>
        </tr>
        <tr>
            <th><label for="email">メールアドレス</label></th>
            <td><input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="〇〇〇@△△.××"></td>
        </tr>
        <!-- 電話番号 -->
        <tr>
            <th></th>
            <td class="err-msg-tel">
                @if ($errors->has('tel'))
                    {{$errors->first('tel')}}
                @endif
            </td>
        </tr>
        <tr>
            <th><label for="tel">電話番号</label></th>
            <td><input type="tel" name="tel" id="tel" value="{{ old('tel') }}" placeholder="〇〇〇-△△△△-××××"></td>
        </tr>
        <!-- 性別 -->
        <tr>
            <th></th>
            <td class="err-msg-gender">
                @if ($errors->has('gender'))
                    {{$errors->first('gender')}}
                @endif
            </td>
        </tr>
        <tr>
            <th><label for="gender">性別</label></th>
            <td><input type="radio" name="gender" id="gender_male" value="男" {{ old('gender') == '男' ? 'checked': ''}}>男
                <input type="radio" name="gender" id="gender_female" value="女" {{ old('gender') == '女' ? 'checked': ''}}>女
                <input type="radio" name="gender" id="gender_other" value="その他" {{ old('gender') == 'その他' ? 'checked': ''}}>その他
            </td>
        </tr>
        <!-- 画像 -->
        <tr>
            <th></th>
            <td class="err-msg-image">
                @if ($errors->has('image'))
                    {{$errors->first('image')}}
                @endif
            </td>
        </tr>
        <tr>
            <th><label for="image">画像</label></th>
            <td><input type="file" name="image" id="image" accept="image/*" onchange="setImage(this);" onclick="this.value = '';"></td>
            <td><img id="preview"></td>
        </tr>
        <!-- 問い合わせ内容 -->
        <tr>
            <th></th>
            <td class="err-msg-context">
                @if ($errors->has('context'))
                    {{$errors->first('context')}}
                @endif
            </td>
        </tr>
        <tr>
            <th><label for="context">問い合わせ内容</label></th>
            <td><textarea name="context" id="context" placeholder="こちらに問い合わせ内容をご記載ください">{{ old('context') }}</textarea></td>
        </tr>
        <!-- 送信ボタン -->
        <tr>
            <th></th>
            <td><button type="submit" class="submit" value="submit">送信</button></td>
        </tr>
        </tbody>
    </table>
</form>
@endsection
