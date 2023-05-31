<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSSの読み込み -->
    <link rel="stylesheet" href="{{ asset('reset.css') }}">
    <link rel="stylesheet" href="{{ asset('inquiry.css') }}">
    <!-- -->
    <title>Document</title>
</head>
<body>
<header>

</header>
<main>
    <form method="POST" action="{{ route('send') }}">
    @csrf

    <label>メールアドレス</label>
    {{ $inputs['email'] }}
    <input name="email" value="{{ $inputs['email'] }}" type="hidden">

    <label>タイトル</label>
    {{ $inputs['title'] }}
    <input name="title" value="{{ $inputs['title'] }}" type="hidden">


    <label>お問い合わせ内容</label>
    {!! nl2br(e($inputs['body'])) !!}
    <input name="body" value="{{ $inputs['body'] }}" type="hidden">

    <button type="submit" name="action" value="back">入力内容修正</button>
    <button type="submit" name="action" value="submit">送信する</button>
    </form>
</main>
<floor>

</floor>
</body>
</html>