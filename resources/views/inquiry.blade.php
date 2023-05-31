@extends('parent')

@section('pageCss')
<link rel="stylesheet" href="{{ asset('css/inquiry.css') }}">
@endsection

@section('title', 'お問合せ')

@section('sub')
<li><a href="{{ route('home') }}">ホーム</a></li>
<li><a href="{{ route('flow') }}">サービスの流れ</a></li>
<li><a href="{{ route('performance') }}">施工実績</a></li>
<li><a href="{{ route('company_profile') }}">会社概要</a></li>
@endsection

@section('main')




<form method="POST" action="{{ route('contact_confirm') }}">
    @csrf

    <div class="u-form__label col-lg-3 col-12 p-3 d-flex justify-content-between">
            <label for="lastName" class="col-form-label">氏名</label>
            <span class="u-form__required"></span>
    </div>

    <label>メールアドレス</label>
    <input
        name="email"
        value="{{ old('email') }}"
        type="text">
    @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
    @endif
    
    <label>タイトル</label>
    <input
        name="title"
        value="{{ old('title') }}"
        type="text">
    @if ($errors->has('title'))
        <p class="error-message">{{ $errors->first('title') }}</p>
    @endif

    <label>お問い合わせ内容</label>
    <textarea name="body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
        <p class="error-message">{{ $errors->first('body') }}</p>
    @endif

    <button type="submit">入力内容確認</button>
</form>
@endsection