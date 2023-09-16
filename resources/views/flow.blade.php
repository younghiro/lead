@extends('parent')

@section('pageCss')
    @if(config('app.env') === 'production')
        <link rel="stylesheet" href="{{ secure_asset('css/flow.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/flow.css') }}">
    @endif
@endsection

@section('title', 'サービスの流れ')

@section('sub')
    <li><a href="{{ route('home') }}">ホーム</a></li>
    <li><a href="{{ route('performance') }}">施工実績</a></li>
    <li><a href="{{ route('inquiry') }}">お問合せ</a></li>
    <li><a href="{{ route('company_profile') }}">会社概要</a></li>
@endsection

@section('main')
    <main>
        <div class="message">
            <h1>サービスの流れ</h1>
            <div class="message_design">
                <div class="message_design2">
                    <h2>お客様に知っておいて欲しいこと</h2>
                    <p>確かな技術力・丁寧な対応・施工。<br class="sma">(電気工事士などの資格保有者多数）</p>
                    <p>緊急時はお電話にてご相談ください。</p>
                    <p>追加料金のご心配はありません。</p>
                </div>
            </div>
            <div class="botton">
                <a href="#" class="cta_btn05">
                    <p class="cta_btn05_copy">お電話で</p>
                    <p>お問い合わせはこちら</p>
                </a>
            </div>
        </div>
        <div class="flow_design">
            <ul class="flow">
                <li>
                    <p class="icon">1</p>
                    <dl>
                    <dt>ご相談・お問い合わせ</dt>
                    <dd>お電話0120-495-912もしくはお問い合わせフォームよりご連絡ください。<br class="sma">（緊急時はお電話が確実です。）<br class="sma">ご相談・お見積りは無料ですのでお気軽にお問い合わせください。</dd>
                    </dl>
                </li>

                <li>
                    <p class="icon">2</p>
                    <dl>
                    <dt>現場調査・お見積り</dt>
                    <dd>現場調査・お見積りのため、事前に日程調整のご連絡を差し上げます。<br class="sma">後に、担当者がお客様のご自宅に伺い、設置場所の寸法や構造などを確認させていただきます。</dd>
                    </dl>
                </li>

                <li>
                    <p class="icon">3</p>
                    <dl>
                    <dt>ご契約</dt>
                    <dd>お見積り金額・工事内容にご納得いただきましたら、ご契約となります。</dd>
                    </dl>
                </li>

                <li>
                    <p class="icon">4</p>
                    <dl>
                    <dt>施工</dt>
                    <dd>お客様のご都合に合わせて施工させて頂きます。</dd>
                    </dl>
                </li>
            </ul>
        </div>
    </main>
@endsection
