@extends('parent')

@section('pageCss')
    @if(config('app.env') === 'production')
        <link rel="stylesheet" href="{{ secure_asset('css/home.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endif
@endsection

@section('title', '株式会社lead')

@section('sub')
    <li><a href="{{ route('flow') }}">サービスの流れ</a></li>
    <li><a href="{{ route('performance') }}">施工実績</a></li>
    <li><a href="{{ route('inquiry') }}">お問合せ</a></li>
    <li><a href="{{ route('company_profile') }}">会社概要</a></li>
@endsection

@section('main')
    <header class="header">
        <div class="header_top">
            <div class="top_main">
                <p class="header_title">エコキュートから深夜電気温水器</p>
                <p class="header_title2">リフォームまで<span class="top_main_companyName">株式会社リード</span></p>
                <h1 class="header_sp1">株式会社リード</h1>
            </div>
        </div>
        <div class="top_bottom">
            <div class="top_bottom_position">
                <p class="slash">menu</p>
                <nav class=four>
                    <a class="nth-child1" href="{{ route('performance') }}" target="_blank" rel="noopener noreferrer">施工実績</a>
                    <a class="nth-child2" href="{{ route('flow') }}" target="_blank" rel="noopener noreferrer">サービスの流れ</a>
                    <a class="nth-child3" href="{{ route('inquiry') }}" target="_blank" rel="noopener noreferrer">お問い合わせ</a>
                    <a class="nth-child4" href="{{ route('company_profile') }}" target="_blank" rel="noopener noreferrer">会社概要</a>
                    <div class="animation start-home"></div>
                </nav>
            </div>
        </div>
        <!-- elements at the top -->
        <div class="humburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <div class="menu-content">
                <ul class="list">
                    <li><a href="{{ route('flow') }}">サービスの流れ</a></li>
                    <li><a href="{{ route('performance') }}">施工実績</a></li>
                    <li><a href="{{ route('inquiry') }}">お問合せ</a></li>
                    <li><a href="{{ route('company_profile') }}">会社概要</a></li>
                </ul>
            </div>
        </div>
        <!-- elements in the top -->
        <div class="sp">
            <p class="sp_header_1">愛知・岐阜の温水器屋さん</p>
            <p class="sp_header_2">エコキュート、温水器の販売・取り付け・修理</p>
            <p class="sp_header_3">また、リフォームを行っております。</p>
            <svg class="logo" xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 400 400" fill="none">
                <rect width="400" height="400" fill="white"/>
                <rect x="30" y="30" width="340" height="340" fill="white" stroke="#D9D9D9" stroke-width="10"/>
                <rect width="40" height="250" transform="matrix(-1 0 0 1 149 75)" fill="#D9D9D9"/>
                <rect width="32" height="200" transform="matrix(0 -1 -1 0 314 325)" fill="#D9D9D9"/>
            </svg>
            <div class="sp_subjects">
                <p class="sp_subjects_space">365日対応</p>
                <p class="sp_subjects_space">地域密着</p>
                <p>自社施工・安心・最安値</p>
            </div>
            <!-- <svg class="scroll" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 300 300" fill="none">
                <rect width="300" height="300" fill="white"/>
                <rect x="148.172" y="227.096" width="120" height="30" rx="15" transform="rotate(-135.908 148.172 227.096)" fill="#A56238"/>
                <rect x="126.764" y="206.113" width="120" height="30" rx="15" transform="rotate(-45.908 126.764 206.113)" fill="#A56238"/>
            </svg> -->
            <svg class="arrows">
              <path class="a1" d="M0 0 L25 32 L50 0"></path>
              <path class="a2" d="M0 20 L25 52 L50 20"></path>
              <path class="a3" d="M0 40 L25 72 L50 40"></path>
            </svg>
        </div>
    </header>
    <main>
        <div class="up">
            <h2 class="main_h2">地域密着、お客様に寄り添います。</h2>
            <h2 class="explanation2">確かな実績</h2>
            <h3 class="explanation3">年間400件以上</h3>
            <p class="contact">お電話でお気軽にお問合せください<p>
            <p class="toll_free_dial">フリーダイアル<p>
            <div class="a_tag">
                <a class="a_number" href="tel:0120495912" target="_blank">お電話</a>
            </div>
        </div>
        <div class="down">
            <div class="container">
                <h1>Lead株式会社</h1>
                <div class="underbar_h1"></div>
                <div class="content_wrapper">
                    <div class="option">
                        <div class="box1">
                            <img src="../images/lead-ecokyutou.jpg" height="200px" width="300px" class="box1_pic">
                            <div class="sentence_box">
                                    <h2>エコキュート</h2>
                                    <div class="underbar_h2"></div>
                                    <p>エコキュートの販売・取り付け・修理、すべて自社施工で行います。</p>
                            </div>
                        </div>
                    </div>
                    <div class="option">
                        <div class="box2">
                        <img src="../images/lead-waterHeater.jpg" height="200px" width="300px" class="box2_pic">
                            <div class="sentence_box">
                                <h2>深夜電気温水器</h2>
                                <div class="underbar_h2"></div>
                                <p>深夜電気温水器の販売・取り付け・修理、すべて自社施工で行います。</p>
                            </div>
                        </div>
                    </div>
                    <div class="option">
                        <div class="box3">
                            <img src="../images/lead-reform.jpg" height="200px" width="300px" class="box3_pic">
                            <div class="sentence_box">
                                    <h2>リフォーム</h2>
                                    <div class="underbar_h2"></div>
                                    <p>安心価格と提案力と高品質で,必ずお客様を満足致します。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection