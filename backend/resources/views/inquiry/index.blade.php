<h1>お問い合わせ</h1>

<form method="POST" action="{{ route('inquiry.confirm') }}"　enctype='multipart/form-data'>
     @csrf
     <label>名前</label>
     <input name="name" value="{{ old('name') }}" type="text">
     <br>

     <label>メールアドレス</label>
     <input name="email" value="{{ old('email') }}" type="email">
     @if ($errors->has('name'))
        {{$errors->first('name')}}
     @endif
     <br>

     <label>電話番号</label>
     <input name="tel" value="{{ old('tel') }}" type="tel">
     <br>

     <label>性別</label>
     <input name="gender" value="男" {{ old('gender') == '男' ? 'checked': ''}} type="radio">男
     <input name="gender" value="女" {{ old('gender') == '女' ? 'checked': ''}} type="radio">女
     <input name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked': ''}} type="radio">その他
     <br>

     <label>画像</label>
     <input name="image" value="{{ old('image') }}" type="file">
     <br>

     <label>お問い合わせ内容</label>
     <textarea name="context">{{ old('context') }}</textarea>
     <br>

     <button type="submit">送信</button>

    </form>
