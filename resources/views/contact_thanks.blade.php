@extends('parent')

@section('pageCss')
<link rel="stylesheet" href="{{ asset('css/contact_thanks.css') }}">
@endsection

@section('title', 'お問合せ')

@section('sub')
<li><a href="{{ route('home') }}">ホーム</a></li>
<li><a href="{{ route('flow') }}">サービスの流れ&emsp;施工実績</a></li>
<li><a href="{{ route('inquiry') }}">お問合せ</a></li>
<li><a href="{{ route('company_profile') }}">会社概要</a></li>
@endsection

@section('main')
<div class="container">
<h1 class="form_exp enph">お問い合わせフォームの送信を<br class="sma">完了致しました。</h1>
<p class="form_exp">
    この度はお問い合わせいただきまして誠にありがとうございます。<br>
    ご入力頂いたメールアドレス宛へ、ご確認メールをお送りしておりますのでご確認ください。<br>
    内容を確認次第、担当者より折返しご連絡させていただきます。今しばらくお待ちくださいませ。<br>
    <br>
    <span class="red">※ご送信後、ご確認メールが届かない場合は、フォームご入力のメールアドレスの誤り、
        <br class="pc">もしくはシステム等の不具合が考えられます。その際にはお手数ですが<br class="pc">
        もう一度ご送信下さいますか、お電話にてお問い合わせくださいますようお願い申し上げます。<br>
        また、まれに迷惑メールフォルダへ入っている場合がございますので、合わせてご確認ください。
    </span>
</p>

<p class="return_btn">
	<a href="{{ route('home') }}" class="btn-1">トップページへ戻る</a>
</p>
</div>
@endsection