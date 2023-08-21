@extends('parent')

@section('pageCss')
@if(config('app.env') === 'production')
<link rel="stylesheet" href="{{ secure_asset('css/contact_confirm.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('css/contact_confirm.css') }}">
    @endif
@endsection

@section('title', 'お問合せ確認画面')

@section('sub')
<li><a href="{{ route('home') }}">ホーム</a></li>
<li><a href="{{ route('flow') }}">サービスの流れ</a></li>
<li><a href="{{ route('performance') }}">施工実績</a></li>
<li><a href="{{ route('company_profile') }}">会社概要</a></li>
@endsection

@section('main')
<div class="contact_confirm_sentences">
    <h1>お問い合わせ確認</h1>
    <p class="contact_explanation">入力情報をご確認のうえ、「送信する」をクリックしてください。</p>
</div>
<form method="POST" action="{{ route('send') }}">
@csrf
    <div class="flex">
        <div class="form-subject">
            <label for="lastName" class="col-form-label">氏名</label>
            <span class="u-form__required"></span>
            <!-- after -->
        </div>
        <div class="form-section">
            <div class="form-detail">
                <p class="confirmation_name">{{ $inputs['lastName'] }}</p>
                <p class="confirmation_name">{{ $inputs['firstName'] }}</p>
                <input type="hidden" id="lastName" name="lastName" class="u-form__control-text form-control" placeholder="山田" value="{{ $inputs['lastName'] }}" maxlength="20" required="">
                <input type="hidden" id="firstName" name="firstName" class="u-form__control-text form-control" placeholder="花子" value="{{ $inputs['firstName'] }}" maxlength="20" required="">
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="form-subject">
            <label for="lastNameKana" class="col-form-label">氏名（カナ）</label>
            <span class="u-form__required"></span>
        </div>
        <div class="form-section">
            <div class="form-detail">
                <p class="confirmation_name">{{ $inputs['lastNameKana'] }}</p>
                <p class="confirmation_name">{{ $inputs['firstNameKana'] }}</p>
                <input type="hidden" id="lastNameKana" name="lastNameKana" class="u-form__control-text form-control" placeholder="ヤマダ" value="{{ $inputs['lastNameKana'] }}" pattern="[\u30A1-\u30F6]*" data-parsley-pattern-message="カタカナで入力してください。" maxlength="20" required="">
                <input type="hidden" id="firstNameKana" name="firstNameKana" class="u-form__control-text form-control" placeholder="ハナコ" value="{{ $inputs['firstNameKana'] }}" pattern="[\u30A1-\u30F6]*" data-parsley-pattern-message="カタカナで入力してください。" maxlength="20" required="">
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="form-subject">
            <label for="email" class="col-form-label">メールアドレス</label>
            <span class="u-form__required"></span>
        </div>
        <div class="form-section">
            <p>{{ $inputs['email'] }}</p>
            <input type="hidden" id="email" name="email" class="u-form__control-text--w50 form-control" placeholder="XXXXXX@XXXX.co.jp" value="{{ $inputs['email'] }}" maxlength="100" required="">
        </div>
    </div>
    <div class="flex">
        <div class="form-subject">
            <label for="content" class="col-form-label">お問い合わせの詳細</label>
            <span class="u-form__required"></span>
        </div>
        <div class="form-section">
            <input type="hidden" id="content" name="content" value="{{$inputs['content']}}">
            <p class="confirmation_content">{!! nl2br(e($inputs['content'])) !!}</p>
        </div>
    </div>
    <div class="button_margin">
        <div class="button_frame flex-shape">
            <div class="button-container button-color">
                <button class="button-detail" type="submit" name="action" value="back">入力内容修正</button>
            </div>
            <div class="button-container">
                <button class="button-detail" type="submit" name="action" value="submit">送信する</button>
            </div>
        </div>
    </div>
</form>

@endsection