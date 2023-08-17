<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSSの読み込み -->
    <link rel="stylesheet" href="{{ secure_asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/home.css') }}">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ secure_asset('images/lead_favicon.ico') }}">
    <!-- -->
    <!-- @if(config('app.env') === 'production')
        <link rel="stylesheet" href="{{ secure_asset('sanitize.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/home.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('sanitize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endif -->
    <title>株式会社リード</title>
</head>
<body>
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
    <footer>
        <div class="footer_inner">
            <div class="inner1">
                <img class="footer_image_logo" src="../images/lead_logo_footer.png" alt="株式会社リード">
                <p class="company_name">株式会社リード</p>
            </div>
            <div class="inner2">
                <p class="opening_time">[営業時間]全日6:00-23:00</p>
                <div class="tel_box">
                    <a class="footer_a_number" href="tel:0120495912" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="_x31_0" x="0px" y="0px" viewBox="0 0 512 512" style="width: 40px; height: 40px; opacity: 1;" xml:space="preserve" fill="#fff">
                           
                            <g>
                                <path class="st0" d="M180.044,441.396c31.762,23.414,65.976,43.122,101.683,58.551c17.914,7.738,29.914,11.648,36.683,11.949   l0.926,0.019c25.132,0,57.59-47.046,61.453-62.316c4.609-18.258-2.004-37.535-16.859-49.113l-33.672-26.258   c-8.414-6.559-18.504-10.028-29.176-10.028c-11.91,0-23.332,4.43-32.148,12.465c-5.195,4.738-12.172,11.406-16.074,16.43   c-0.145,0.09-0.504,0.242-1.266,0.242c-14.074,0-63.355-42.871-76.523-56.582c-13.906-13.352-57.238-63.191-56.484-76.718   c0.05-0.891,0.316-1.094,0.402-1.164c4.843-3.703,11.519-10.684,16.266-15.891c15.691-17.214,16.718-43,2.437-61.312l-26.258-33.68   c-1.988-2.55-4.43-5-7.855-7.808c-1.301-1.035-2.633-2.008-4.535-3.211c-5.973-3.718-12.55-6.023-19.691-6.867   c-1.926-0.222-3.867-0.336-5.821-0.336c-3.847,0-7.625,0.461-11.21,1.371c-13.457,3.394-63.488,35.878-62.301,62.378   c0.309,6.774,4.218,18.774,11.953,36.676c15.461,35.778,35.199,70.039,58.66,101.832   C101.411,373.834,138.223,410.634,180.044,441.396z" />
                                <path class="st0" d="M512,265.807c-2.012-70.16-30.293-135.832-80.148-185.691C383.055,31.319,318.895,3.28,250.11,0.296   c-1.266-0.059-2.524-0.172-3.794-0.211v0.008c-0.054,0-0.106-0.004-0.16-0.008l-0.043,40.313   c59.485,1.98,115.058,26.027,157.246,68.21c42.187,42.191,66.273,97.75,68.316,157.195L512,265.807z" />
                                <path class="st0" d="M431.367,265.803c-2.023-48.672-21.91-94.114-56.5-128.703c-33.652-33.652-77.632-53.214-124.858-56.062   c-1.238-0.078-2.454-0.281-3.696-0.336v0.016c-0.054-0.004-0.109-0.012-0.164-0.016l-0.035,40.352   c37.993,1.976,73.34,17.617,100.262,44.538c26.973,26.973,42.656,62.305,44.653,100.211H431.367z" />
                                <path class="st0" d="M249.145,161.737c-0.949-0.094-1.878-0.27-2.832-0.34v0.016c-0.05-0.004-0.105-0.012-0.156-0.016   l-0.043,40.461c16.426,1.809,31.566,9.008,43.278,20.719c11.758,11.758,18.988,26.878,20.82,43.226h37.473l2.73,0.011v-0.011h0.16   c-1.894-27.141-13.336-52.363-32.691-71.719C299.242,175.444,275.142,164.241,249.145,161.737z" />
                            </g>
                            <a class="a_number" href="tel:0120495912" target="_blank"></a>
                        </svg>
                    </a>
                </div>
                <div class="mail"> 
                    <a href="{{ route('inquiry') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="_x32_" x="0px" y="0px" viewBox="0 0 512 512" style="width: 40px; height: 40px; opacity: 1;" xml:space="preserve" fill="#fff">
                            <g>
                                <path class="st0" d="M510.678,112.275c-2.308-11.626-7.463-22.265-14.662-31.054c-1.518-1.915-3.104-3.63-4.823-5.345   c-12.755-12.818-30.657-20.814-50.214-20.814H71.021c-19.557,0-37.395,7.996-50.21,20.814c-1.715,1.715-3.301,3.43-4.823,5.345   C8.785,90.009,3.63,100.649,1.386,112.275C0.464,116.762,0,121.399,0,126.087V385.92c0,9.968,2.114,19.55,5.884,28.203   c3.497,8.26,8.653,15.734,14.926,22.001c1.59,1.586,3.169,3.044,4.892,4.494c12.286,10.175,28.145,16.32,45.319,16.32h369.958   c17.18,0,33.108-6.145,45.323-16.384c1.718-1.386,3.305-2.844,4.891-4.43c6.27-6.267,11.425-13.741,14.994-22.001v-0.064   c3.769-8.653,5.812-18.171,5.812-28.138V126.087C512,121.399,511.543,116.762,510.678,112.275z M46.509,101.571   c6.345-6.338,14.866-10.175,24.512-10.175h369.958c9.646,0,18.242,3.837,24.512,10.175c1.122,1.129,2.179,2.387,3.112,3.637   L274.696,274.203c-5.348,4.687-11.954,7.002-18.696,7.002c-6.674,0-13.276-2.315-18.695-7.002L43.472,105.136   C44.33,103.886,45.387,102.7,46.509,101.571z M36.334,385.92V142.735L176.658,265.15L36.405,387.435   C36.334,386.971,36.334,386.449,36.334,385.92z M440.979,420.597H71.021c-6.281,0-12.158-1.651-17.174-4.552l147.978-128.959   l13.815,12.018c11.561,10.046,26.028,15.134,40.36,15.134c14.406,0,28.872-5.088,40.432-15.134l13.808-12.018l147.92,128.959   C453.137,418.946,447.26,420.597,440.979,420.597z M475.666,385.92c0,0.529,0,1.051-0.068,1.515L335.346,265.221L475.666,142.8   V385.92z" />
                            </g>
                        </svg>
                    </a> 
                </div>
            </div>
            <p class="copy_right">© 2023 Lead inc. All rights reserved</p>
        </div>
    </footer>
</body>
</html>
