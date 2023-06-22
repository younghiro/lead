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

<h1>お問合せ</h1>
<p class=h1-explanation>ご返信につきましては順次ご対応のため、<br class="sma">回答にお時間をいただくことがございます。</p>
<h2>■フリーダイヤル</h2>
<ul class=contact-detail>
    <li>TEL： 0120-10-0000</li>
    <li>お問い合わせ受付時間</li>
    <li>全日　６：00～23：00</li>
</ul>
<h2>■メールフォーム</h2>
<ul class=contact-detail>
    <li>※お問い合わせはメールにてご回答いたします。</li>
    <li>【　info@lead-aichi.com　】からのメールを<br class="sma">受信可能にしてください。</li>
    <li>以下の入力フォームにお問い合わせ内容を入力し<br class="sma">「確認する」をクリックしてください。</li>
</ul>

<!-- 
parameters 

lastName,
firstName,
lastNameKana,
firstNameKana,
email,
text 

-->
<form method="POST" action="{{ route('contact_confirm') }}">
    @csrf
    <div class="flex">
        <div class="form-subject">
            <label for="lastName" class="col-form-label">氏名</label>
            <span class="u-form__required"></span>
            <!-- after -->
        </div>
        <div class="form-section">
            <div class="form-detail">
                <input type="text" id="lastName" name="lastName" class="u-form__control-text form-control" placeholder="山田" value="{{ old('lastName') }}" maxlength="20" required="">
                @if ($errors->has('lastName'))
                    <p class="error-message">{{ $errors->first('body') }}</p>
                @endif
            </div>
            <div class="form-detail">
                <input type="text" id="firstName" name="firstName" class="u-form__control-text form-control" placeholder="花子" value="{{ old('firstName') }}" maxlength="20" required="">
                @if ($errors->has('firstName'))
                    <p class="error-message">{{ $errors->first('body') }}</p>
                @endif
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
                <input type="text" id="lastNameKana" name="lastNameKana" class="u-form__control-text form-control" placeholder="ヤマダ" value="{{ old('lastNameKana') }}" pattern="[\u30A1-\u30F6]*" data-parsley-pattern-message="カタカナで入力してください。" maxlength="20" required="">
                @if ($errors->has('lastNameKana'))
                    <p class="error-message">{{ $errors->first('body') }}</p>
                @endif
            </div>
            <div class="form-detail">
                <input type="text" id="firstNameKana" name="firstNameKana" class="u-form__control-text form-control" placeholder="ハナコ" value="{{ old('firstNameKana') }}" pattern="[\u30A1-\u30F6]*" data-parsley-pattern-message="カタカナで入力してください。" maxlength="20" required="">
                @if ($errors->has('firstNameKana'))
                    <p class="error-message">{{ $errors->first('body') }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="form-subject">
            <label for="email" class="col-form-label">メールアドレス</label>
            <span class="u-form__required"></span>
        </div>
        <div class="form-section">
            <input type="email" id="email" name="email" class="u-form__control-text--w50 form-control" placeholder="XXXXXX@XXXX.co.jp" value="{{ old('email') }}" maxlength="100" required="">
            @if ($errors->has('email'))
                <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
        </div>
    </div>
    <div class="flex">
        <div class="form-subject">
            <label for="content" class="col-form-label">お問い合わせの詳細</label>
            <span class="u-form__required"></span>
        </div>
        <div class="form-section">
            <textarea type="text" id="content" name="content" class="form-control" rows="8" placeholder="" required="" value="{{ old('content') }}">{{ old('content') }}</textarea>
            @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
            @endif
        </div>
    </div>
    <div class="u-margin-sm__tb">
        <div class="c-button-list">
            <div class="button_frame">
                <div class="button_detail">
                    <button onclick="" type="submit" class="c-button__primary ">確認する</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection