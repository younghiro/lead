@extends('parent')

@section('pageCss')
    @if(config('app.env') =='production')
        <link rel="stylesheet" href="{{ secure_asset('css/company_profile.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/company_profile.css') }}">
    @endif
@endsection

@section('title', '会社概要')

@section('sub')
    <li><a href="{{ route('home') }}">ホーム</a></li>
    <li><a href="{{ route('flow') }}">サービスの流れ</a></li>
    <li><a href="{{ route('performance') }}">施工実績</a></li>
    <li><a href="{{ route('inquiry') }}">お問合せ</a></li>
@endsection

@section('main')
    <!-- elements in the left -->
    <div class="left">
        <div class="left-content">
            <nav class="content-navigator">
            <ul>
                <h3>CONTENT</h3>  
                <li><span><a href="#about-company-title">ごあいさつ</a></span></li>
                <li><span><a href="#philo-title">経営理念</a></span></li>
                <li><span><a href="#copany-detail-title">会社概要</a></span></li>
            </ul>
            </nav>
        </div>
    </div>
    <!-- elements in the left -->

    <!-- elements in the middle -->
    <div class="middle">
        <div class="about-company">
            <h2 id="about-company-title">会社概要<span class="subtitle">COMPANY</span></h2>
            <p>
                株式会社リードは、お客様の住まいに関する悩みや不安を解消するために、お風呂やトイレに特化したリフォーム会社です。<br>
                お客様からのご要望やご相談には、迅速かつ丁寧に対応し、最適なリフォームプランをご提案いたします。<br>
                およそ年間400件のご注文をいただいており、そのスピードは業界でもトップクラスです。<br>
                私たちは、お客様のニーズに合わせた施工内容や工期をしっかりとご説明し、ご満足いただける仕上がりを目指しています。<br>

                風呂やトイレなどの水まわりのリフォームは、住まいの快適さや清潔感を左右する重要なポイントです。<br>
                株式会社リードにお任せいただければ、業界15年の確かな技術力と知識を低価格の施工サービスでご提供し、お客様にとって理想的な住まいを実現いたします。<br>
                また、リフォーム後のアフターフォローにも力を入れ、お客様に安心して暮らしていただけるように全力でサポート致します。<br>

                ぜひ多くの皆様との出会いがありますよう、お問い合わせお待ちいたしております。<br><br>
                
                <span class="CEO-name">
                    株式会社リード<br>
                    代表取締役<br>
                    加藤　真二
                </span>
            </p>
        </div>
        <div class="philosophy">
            <h2 id="philo-title">理念<span class="subtitle">PHILOSOPHY</span></h2>
            <p class="sub_philosophy">"心を込めたサービスと技術で<br class="br-sp">豊かで快適な社会を目指します"</p>
            <h3 class="main_philosophy">より良い生活を未来へリード</h3>
        </div>
        <div class="company-detail">
            <h2 id="copany-detail-title">会社詳細<span class="subtitle">DETAIL</span></h2>
            <dl class="detail-list">
                <dt>会社名</dt>
                <dd>株式会社リード</dd>
  
                <dt>事業内容</dt>
                <dd>
                    ○ 電気温水器・エコキュート販売・修理取付<br>
                    ○ リフォーム全般<br>
                    ※個人所有物損害物の復旧工事・調査・鑑定
                    保険会社からの一報より迅速に初動対応し、被害者との打ち合せ
                    仮復旧工事・養生工事・現場清掃等の対応をします。<br>
                    ※復旧工事・調査等の対応は、土曜日・日曜日の対応もしております。
                    保険会社からの一報より迅速に初動対応し、被害者との打ち合せ
                    仮復旧工事・養生工事・現場清掃等の対応をします。<br>
                    ※対応エリア東海地方全域(愛知・岐阜)<br>
                    ※復旧工事・調査等の対応は、土曜日・日曜日の対応もしております。<br>
                </dd>
  
                <dt>事業エリア</dt>
                <dd>
                    【愛知県】<br>
                    名古屋市
                    （熱田区、北区、昭和区、千種区、天白区、中川区、中区、中村区、西区、東区、瑞穂区、緑区、港区、南区、名東区、守山区）
                    愛西市、あま市、稲沢市、犬山市、岩倉市、尾張旭市、津島市、春日井市、北名古屋市、清須市、江南市、小牧市、瀬戸市、
                    長久手市、弥富市、東海市、大府市、豊田市、みよし市、知立市、豊明市、日進市、岡崎市、海部郡（大治町　蟹江町　飛島町）、
                    丹羽郡（大口町　扶桑町）、西春日井郡（豊山町）、愛知郡（東郷町）<br>

                    【岐阜県】<br>
                    岐阜市、大垣市、海津市、各務原市、可児市、関市、多治見市、土岐市、羽島市、瑞穂市、美濃加茂市、美濃市、山県市、
                    安八郡（安八町　神戸町　輪之内町）、揖斐郡（池田町　揖斐川町　大野町）、羽島郡（笠松町　岐南町）、本巣群（北方町）、
                    不破郡（関ケ原町　垂井町）、加茂郡（川辺町　坂祝町　白川町　富加町　八百津町　七宗町　東白川村）、可児郡（御嵩町）、養老郡（養老町）<br>

                    【三重県】<br>
                    四日市市、いなべ市、亀山市、桑名市、鈴鹿市、三重郡（朝日町　川越町　菰野町）、桑名郡（木曽岬町）<br>
                </dd>
  
                <dt>会社所在地</dt>
                <dd>愛知県一宮市今伊勢町馬寄字北塚本12番地3</dd>
  
                <dt>代表取締役</dt>
                <dd>加藤真二</dd>
              </dl>
        </div>
    </div>
    <!-- elements in the middle -->
@endsection