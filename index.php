<!DOCTYPE html>

<html lang="ja">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <title>相模原訪問リハビリセンター</title>
    <link rel="icon" href="img/logo.png">

    <!-- メールフォームのCSS -->
    <!-- <link rel="stylesheet" href="css/reset.css" /> -->
    <link rel="stylesheet" href="mail/css/mailform.css">
    <link rel="stylesheet" href="mail/css/jquery.datetimepicker.css" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//unpkg.com/vue"></script>
    <script src="contents-maker/js/contents-maker.js" id="contents-maker-js" async></script>
</head>

<body>

    <!-- ヘッダー -->
    <header class="header">
        <div class="header__top">
            <img src="img/logo.png" alt="ロゴ">
            <h1 class="thick_blue">相模原訪問リハビリセンター</h1>
        </div>
        <p class="header__mid thick_white">リハビリ訪問実績3万件以上</p>
        <h2 class="header__main hp_mb15 thick_blue">
            脳梗塞の後遺症でお悩みの方の
        </h2>
        <h2 class="header__main thick_blue">
            <span class="header__main_red thick_red">９２.７%</span>が改善を実感<span class="header__main_small">(※1)</span><br>
            <span class="header__main_middle thick_blue">健康保険適用の訪問リハビリマッサージ</span>
        </h2>

        <div class="wrapper2 wrapper_650">
            <img src="img/main.jpg" alt="トップ写真">
        </div>

        <div class="header__bottom wrapper wrapper_650 thick_blue">
            <p class="hp_mb10">施術料(交通費込)1回300～400円程度<span class="header__bottom_small">(※2)</span></p>
            <p>障がい者手帳1･2級をお持ちの方無料<span class="header__bottom_small">(※3)</span>です</p>
        </div>

        <div class="header__containerAnno wrapper wrapper_650">
            <p class="header__annotation">※1　2014年1月～2021年6月までの実績です｡</p>
            <p class="header__annotation">※2　健康保険１割負担の方の場合です｡　</p>
            <p class="header__annotation hp_mb15">※3　３級の方は､一部無料です｡</p>
        </div>
    </header>

    <!-- コロナ -->
    <section id="colona" class="colona wrapper wrapper_650" v-pre>

    <!-- 上の部分 -->
    <div class="colona__top">
        <h3 class="colona__ttl thick_blue">新型コロナ対策実施中</h3>
        <div class="colona__icons">
            <figure class="colona__icon">
                <img loading="lazy" src="img/colona/colona1.svg" alt="マスク">
            </figure>
            <figure class="colona__icon">
                <img loading="lazy" src="img/colona/colona3.svg" alt="消毒">
            </figure>
            <figure class="colona__icon">
                <img loading="lazy" src="img/colona/colona4.svg" alt="体調管理">
            </figure>
            <figure class="colona__icon">
                <img loading="lazy" src="img/colona/colona2.svg" alt="換気">
            </figure>
        </div>
        <p class="colona__ann thick_red">ご利用の前に体温を測り37.5度以上</p>
        <p class="colona__ann thick_red">ある場合は必ずお電話ください｡</p>
    </div>

    <!-- アコーディオン部分 -->
    <div id="accordion">
        <button class="colona__btn thick_white" v-bind:class="{colona__btn_open:isOpen}" @click="clickAccordion">予防対策の詳細はこちら</button>
        <transition name="accordion" @before-enter="beforeEnter" @enter="enter" @before-leabve="beforeLeave" @leave="leave">
            <div class="colona__inner" v-if="isOpen">
                <p class="colona__head thick_blue">(1)施術スタッフの取り組み</p>
                <p class="colona__txt">マスクの着用</p>
                <p class="colona__txt">利用者様宅洗面所での手洗い</p>
                <p class="colona__txt">施術時使用のタオル等において､頻度の高い消毒と衛生管理の徹底</p>
                <p class="colona__txt">施術者の消毒用アルコール携行の徹底</p>
                <p class="colona__txt">全ての利用者様へ毎日検温をして頂く為のお声掛け</p>
                <p class="colona__txt hp_mb15">施術スタッフの毎日の検温の義務化｡<span class="colona__txt_bold">３７．５℃</span>以上の場合はコロナ陰性が確定するまで自宅待機とする｡</p>

                <p class="colona__head thick_blue">(2)利用者様へのお願い</p>
                <p class="colona__txt">施術前の手洗い､うがいのために､洗面所をお借りいたします</p>
                <p class="colona__txt hp_mb15">検温のご協力お願いします｡<span class="colona__txt_bold">３７．５℃</span>以上の場合は施術は中止になりますのでご連絡お願い致します｡</p>

                <p class="colona__red">上記事項､感染拡大抑止につきまして､<br>ご理解､ご協力のほどよろしくお願い申し上げます｡</p>
            </div>
        </transition>
    </div>

    </section>
        
        <!-- 更新情報 -->
    <div id="contents">

        <!-- <link rel="stylesheet" href="contents-maker/css/style.css"> -->
        <p class="">新着情報</p>

        <div id="news"></div>
    </div>
    
    

    <!-- 画像
    <div class="wrapper wrapper_650">
        <div class="hp_mb30">
            <img src="img/sample.jpg" alt="写真1">
        </div>
        <div class="container hp_mb30">
            <div class="board">
                <div class="">
                    <img src="img/sample.jpg" alt="写真1">
                </div>
                <div class="">
                    <img src="img/sample.jpg" alt="写真1">
                </div>
                <div class="">
                    <img src="img/sample.jpg" alt="写真1">
                </div>
                <div class="">
                    <img src="img/sample.jpg" alt="写真1">
                </div>
                <div class="">
                    <img src="img/sample.jpg" alt="写真1">
                </div>
            </div>
        </div>
    </div>
    -->
<br>
    
    <!-- 当院3つの特徴 -->
    <section class="feature hp_mb50">
        <h3 class="blue-bg-ttl">訪問リハビリセンターの<span class="blue-bg-ttl_big">3</span>つの特徴</h3>
        <div class="wrapper wrapper_900">
            <div class="feature__list">
                <div class="feature__num">
                    <p class="feature__feature thick_white">特徴</p>
                    <p class="feature__num_big thick_white">1</p>
                </div>
                <div class="feature__txt"><span class="marker">施術実績３万件以上の質の高いリハビリ<small>※1</small></span></div>
            </div>
            <div class="feature__list">
                <div class="feature__num feature__num_3row">
                <p class="feature__feature thick_white">特徴</p>
                    <p class="feature__num_big thick_white">2</p>
                </div>
                <div class="feature__txt">
                    <span class="marker">要介護度１・２・３の方のリハビリに特化。</span><br>
                    <span class="marker">関節可動域訓練、寝返り</span>・起き上がり・<br class="d-xs-none">立ち上がり・歩行訓練など。
                </div>
            </div>
            <div class="feature__list">
                <div class="feature__num feature__num_3row">
                    <p class="feature__feature thick_white">特徴</p>
                    <p class="feature__num_big thick_white">3</p>
                </div>
                <div class="feature__txt">
                    健康保険適用１回300〜400円程度<br>
                    （交通費込み）<small>※2</small>で受けることができます。<br>
                    障がい者手帳１・２級の方は無料<small>※2</small>。
                </div>
            </div>
            <p class="feature__ann">※1:健康保険１割負担の方の場合です。</p>
            <p class="feature__ann">
                ※2:障がい者手帳１・２級の方は無料、３級の場合は一部無料です。<br>
                区によって、保険制度が異なる場合がございますのでご確認ください。
            </p>
        </div>
    </section>

    <!-- 連絡 -->
    <div class="wrapper wrapper_900 hp_mb10 text_center">
        <a href="tel:0428162874">
            <img src="img/tel.png" alt="電話番号">
        </a>
    </div>

    <!--出勤表 -->
    <div class="wrapper wrapper_900 hp_mb20 text_center">
        <img src="img/shift.png" alt="出勤表">
    </div>
    
    <!-- リハビリ風景 -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">在宅でのリハビリ風景をご覧ください</h3>
        <div class="wrapper wrapper_900">
            <p class="state__title hp_mb10 thick">ベッド上でのリハビリ・立ち上がり訓練の様子</p>
            <iframe class="state__video hp_mb10" width="100%" src="https://www.youtube.com/embed/GEA_OYZSbI8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p class="state__title hp_mb10 thick">歩行訓練の様子</p>
            <iframe class="state__video" class="hp_mb10" width="100%" src="https://www.youtube.com/embed/Av4sfsSIrzI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
    </section>

    <!-- 利用者の声 -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl hp_mb0">ご利用者様のお喜びの声を<br>お聞きください</h3>
        <div class="wrapper_voice">
            <div class="wrapper wrapper_650 voice_card">
                <h3 class="voice_title thick_blue">
                    完全に寝たきりから歩行訓練をできるまでになりました！
                </h3>
                <h3 class="voice_name thick">
                    堀田様　82歳　南区<br>
                    脳梗塞後遺症　要介護度4
                </h3>
                <div class="row">
                    <div class="col-7">
                        <p class="voice_desc">
                            リハビリをしようとしてくれず、ほぼ寝たきりになってしまいました。<br>
                            ですが相模原訪今まで一切リハビリをしてくれなかったのが熱心に取り組んでくれて娘と喜びました。<br>
                            今は寝たきりから歩行訓練をするまでに回復しました。
                        </p>
                    </div>
                    <div class="voice_img col-5">
                        <img src="img/voice1.jpg" alt="お客様の声1">
                    </div>
                </div>
                <p class="voice_precaution">
                    ※こちらは個人の感想であり、効果を保証するものではありません。
                </p>
            </div>
            <div class="wrapper wrapper_650 voice_card">
                <h3 class="voice_title thick_blue">
                    長時間車いすに座れるようになりました！
                </h3>
                <h3 class="voice_name thick">
                    黒川様　70歳　中央区<br>
                    脊髄損傷　要介護度5
                </h3>
                <div class="row">
                    <div class="col-7">
                        <p class="voice_desc">
                            職人をしておりましたが、屋根から転落し、脊髄損傷になってしまいました。<br>
                            座ることも大変でしたが、リハビリの結果、長時間座ることができるようになりました。
                        </p>
                    </div>
                    <div class="voice_img col-5">
                        <img src="img/voice2.jpg" alt="お客様の声2">
                    </div>
                </div>
                <p class="voice_precaution" style="font-size:8px">
                ※こちらは個人の感想であり、効果を保証するものではありません。
                </p>                
            </div>
            <div class="wrapper wrapper_650 voice_card">
                <h3 class="voice_title thick_blue">
                    杖をつきながら外出できるようになりました！
                </h3>
                <h3 class="voice_name thick">
                    萩原様　40歳　南区<br>
                    脳出血後遺症　要介護度3
                </h3>
                <div class="row">
                    <div class="col-7">
                        <p class="voice_desc">
                            ３９歳で脳出血を発症し、まったく歩けない日々が続きましたが、先生が親身にリハビリしてくれて、今では自分で立ち上がり、杖をつけば一人で外出できるまでになりました。
                        </p>
                    </div>
                    <div class="voice_img col-5">
                        <img src="img/voice3.jpg" alt="お客様の声3">
                    </div>
                </div>
                <p class="voice_precaution">
                ※こちらは個人の感想であり、効果を保証するものではありません。
                </p>
            </div>
            <div class="wrapper wrapper_650 voice_card">
                <h3 class="voice_title thick_blue">
                    痛みで寝れなかったのがぐっすり眠れるようになりました！
                </h3>
                <h3 class="voice_name thick">
                    倉永様　89歳　緑区<br>
                    廃用性症候群 要介護度4
                </h3>
                <div class="row">
                    <div class="col-7">
                        <p class="voice_desc">
                            脳梗塞で車いすの生活になってしまいました。<br>
                            痛みがひどく眠れない時期が続きましたが、先生にマッサージや鍼灸をしてもらい、痛みが減って今ではぐっすり眠れるようになりました。
                        </p>
                    </div>
                    <div class="voice_img col-5">
                        <img src="img/voice4.jpg" alt="お客様の声4">
                    </div>
                </div>
                <p class="voice_precaution">
                ※こちらは個人の感想であり、効果を保証するものではありません。
                </p>
            </div>
        </div>
    </section>

    <!-- 連絡 -->
    <div class="wrapper wrapper_650 hp_mb10 text_center">
        <a href="tel:0428162874">
            <img src="img/tel.png" alt="電話番号">
        </a>    </div>

    <!--出勤表 -->
    <div class="wrapper wrapper_650 hp_mb20 text_center">
        <img src="img/shift.png" alt="出勤表">
    </div>

    <!-- お悩み -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">脳梗塞や脳出血の後遺症で<br>お悩みありませんか？</h3>
        <div class="wor__lists wrapper wrapper_900">
            <dl class="wor__list">
                <dt class="wor__icon">
                ＞
                </dt>
                <dd class="wor__txt thick">退院後､だんだん歩けなくなってきている</dd>
            </dl>
            <dl class="wor__list">
                <dt class="wor__icon">
                ＞                </dt>
                <dd class="wor__txt thick">リハビリの量が全然足りていない</dd>
            </dl>
            <dl class="wor__list">
                <dt class="wor__icon">
                ＞                </dt>
                <dd class="wor__txt thick">リハビリをしたいけど､介護保険の枠がいっぱい</dd>
            </dl>
            <dl class="wor__list">
                <dt class="wor__icon">
                ＞                </dt>
                <dd class="wor__txt thick">リハビリをしたいけど､自費のリハビリは高額で継続できない</dd>
            </dl>
            <dl class="wor__list">
                <dt class="wor__icon">
                ＞                </dt>
                <dd class="wor__txt thick">集団ではなく､個別でみっちりリハビリして欲しい</dd>
            </dl>
            <dl class="wor__list">
                <dt class="wor__icon">
                ＞                </dt>
                <dd class="wor__txt thick">身体の筋力が低下して、トイレやオムツ交換の介護が大変・・・</dd>
            </dl>
            <dl class="wor__list">
                <dt class="wor__icon">
                ＞                </dt>
                <dd class="wor__txt thick">からだの痛みやしびれがとてもつらい</dd>
            </dl>
            <dl class="wor__list">
                <dt class="wor__icon">
                ＞                </dt>
                <dd class="wor__txt thick">これ以上悪化させて介護負担を大きくしたくない・・・</dd>
            </dl>
        </div>
    </section>

    <!-- お任せ -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">
            脳梗塞・脳出血などのリハビリは、<br>
            わたしたちにお任せください
        </h3>
        <div class="wrapper wrapper_900">
            <img class="hp_mb10" src="img/sample.jpg" alt="集合写真">
            <p class="text_center up_to_us__txt">
                脳梗塞のリハビリや痛みの軽減のマッサージは、<br>
                国家資格保持者の経験豊富なスタッフが対応致します。
            </p>
        </div>
    </section>

    <!-- 理由 -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">当院が選ばれる５つの理由</h3>
        <div class="wrapper wrapper_900">
        <div class="feature5__content hp_mb30">
            <div class="feature5__ttls">
                <p class="c_faq__left c_faq__left_top">１</p>
                <p class="feature5__ttl thick_blue">
                    要介護度１・２・３の<br class="d-sm-none">リハビリに特化
                </p>
            </div>
            <p class="feature5__txt">
                脳梗塞・脳出血で要介護度１・２・３のご利用者様に特化しています。ご利用者様の状態に合わせて、立ち上がり訓練や歩行訓練、痛み軽減のマッサージなどを行います。
            </p>        </div>
        <div class="feature5__content hp_mb30">
            <div class="feature5__ttls">
            <p class="c_faq__left c_faq__left_top">２</p>
                <p class="feature5__ttl thick_blue">
                    施術実績３万件以上
                </p>
            </div>
            <p class="feature5__txt">
                当院は要介護度１２３のご利用者様の施術実績が3万件以上(※1)で、９２．７％の方が改善したとの効果を実感しております。(※2)
            </p>
        </div>
        <div class="feature5__content hp_mb30">
            <div class="feature5__ttls">
            <p class="c_faq__left c_faq__left_top">３</p>
                <p class="feature5__ttl thick_blue">
                    継続的なリハビリ量の確保
                </p>
            </div>
            <p class="feature5__txt hp_mb50">
                当院のリハビリ・マッサージは健康保険適用のため、介護保険の枠とは別で受けることができ、自費リハビリとも違い安価なため、長期的にリハビリを受けることができます。
            </p>
            <p class="feature5__txt_big">
                介護保険リハビリとの併用で<br>
            </p>
            <p class="feature5__txt_big hp_mb30">
                <span class="feature5__pink">「1か月間」</span>のリハビリ量が9倍に
            </p>
            <img class="hp_mb10" src="img/feature5.png" alt="画像">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 feature5__txt2">
                        介護保険内リハビリ<br>
                        【リハビリ型デイサービス】<br>
                        週2回利用：<br>
                        1回15分×8回＝2時間
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 feature5__txt2">
                        健康保険適用<br>
                        【リハビリマッサージ】<br>
                        週3回利用：<br>
                        1回30分×12回＝6時間<br>
                        自宅課題：<br>
                        1回20分×30回＝10時間
                    </div>
                </div>
            </div>
        </div>
        <div class="feature5__content hp_mb30">
            <div class="feature5__ttls">
            <p class="c_faq__left c_faq__left_top">４</p>
                <p class="feature5__ttl thick_blue">
                    全員が国家資格者
                </p>
            </div>
            <p class="feature5__txt">
                当院の施術スタッフは全員が国家資格を所持しております。
            </p>        
        </div>
        <div class="feature5__content hp_mb30">
            <div class="feature5__ttls">
            <p class="c_faq__left c_faq__left_top">５</p>
                <p class="feature5__ttl thick_blue">
                    健康保険適用1回400円程度で<br>
                    継続しやすいから
                </p>
            </div>
            <p class="feature5__txt">
                当院のリハビリは健康保険適用で1回400円程度、障がい者手帳１・２級の方は無料で受けることができるため、長期的に継続できます。
            </p>
            <p class="c_cost__ttl hp_mb10">6か月継続して利用した場合の料金</p>          
            <img class="hp_mb10" src="img/feature5-2.png" alt="画像">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 feature5__txt">
                        <div class="feature5__green text_center hp_mb10">
                            自費リハビリ
                        </div>
                        <div class="feature5__fee">
                            【週３回利用×６ヶ月】<br>
                            1回20,000円×8回×6ヶ月<br>
                            ＝96万円
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 feature5__txt">
                        <div class="feature5__green text_center hp_mb10">
                            健康保険適用
                        </div>
                        <div class="feature5__fee hp_mb10">
                            リハビリマッサージ<br>
                            週3回利用×6ヶ月<br>
                            １回4,000円×12回×<br>
                            ６ヶ月=28,800円<br>
                        </div>
                        <div class="feature5__orange">
                            ※障がい者手帳<br>
                            1・2級の方は無料
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="feature5__txt feature5__txt_big hp_tac thick">
            当院は<span>「要介護度1・2・3」</span>に特化<br>
            した訪問リハビリマッサージです。
        </p>
        <table class="feature5__table">
            <tr>
                <th></th>
                <th class="thick_white">当院</th>
                <th class="thick_white">A院</th>
            </tr>
            <tr>
                <td class="thick_blue">保険</td>
                <td>健康保険<br><span class="feature5__mark_red">◎</span></td>
                <td>自費<br><span class="feature5__mark">×</span></td>
            </tr>
            <tr>
                <td class="thick_blue">体験</td>
                <td>無料<br><span class="feature5__mark_red">◎</span></td>
                <td>5,000円<br><span class="feature5__mark">×</span></td>
            </tr>
            <tr>
                <td class="thick_blue">料金</td>
                <td>1回400円〜<br><span class="feature5__mark_red">◎</span></td>
                <td>1回20,000円<br><span class="feature5__mark">×</span></td>
            </tr>
            <tr>
                <td class="thick_blue">点数制限</td>
                <td>なし<br><span class="feature5__mark_red">◎</span></td>
                <td>なし<br><span class="feature5__mark">◎</span></td>
            </tr>
            <tr>
                <td class="thick_blue">移動負担</td>
                <td>訪問<br><span class="feature5__mark_red">◎</span></td>
                <td>通所<br><span class="feature5__mark">×</span></td>
            </tr>
            <tr>
                <td class="thick_blue">リハビリ</td>
                <td><span class="feature5__mark_red">◎</span></td>
                <td><span class="feature5__mark">◎</span></td>
            </tr>
            <tr>
                <td class="thick_blue">マッサージ</td>
                <td><span class="feature5__mark_red">◎</span></td>
                <td><span class="feature5__mark">×</span></td>
            </tr>
            <tr>
                <td class="thick_blue">施術者</td>
                <td>国家資格<br><span class="feature5__mark_red">◎</span></td>
                <td>国家資格<br><span class="feature5__mark">◎</span></td>
            </tr>
        </table>
    </section>

    <!-- 連絡 -->
    <div class="wrapper wrapper_650 hp_mb10 text_center">
        <a href="tel:0428162874">
            <img src="img/tel.png" alt="電話番号">
        </a>    </div>

    <!--出勤表 -->
    <div class="wrapper wrapper_650 hp_mb20 text_center">
        <img src="img/shift.png" alt="出勤表">
    </div>

    <!-- 対応します -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">このようなお悩みに対応します</h3>
        <div class="wrapper wrapper_900">
            <p class="worries_txt hp_mb20">
                当院では利用者様やご家族様の身体の状態やお悩み、<br class="d-sm-none">その日の体調に合わせて、あらゆる施術メニューをオーダーメイドで行っております。
            </p>

            <h2 class="worries_title hp_mb10 thick_white"><span class="worries_num">悩み1</span>　着せ替えが大変</h2>
            <h2 class="worries_sub_title hp_mb10 text_center thick_blue">関節可動域訓練</h2>
            <img class="hp_mb10" src="img/worries_1.jpg" alt="関節可動域訓練">
            <p class="worries_txt hp_mb30">
                上下肢の関節可動域を広げることにより、着替えが楽にできます。
            </p>

            <h2 class="worries_title hp_mb10 thick_white"><span class="worries_num">悩み2</span>　車イスで姿勢を保てない</h2>
            <h2 class="worries_sub_title hp_mb10 text_center thick_blue">座位保持訓練</h2>
            <img class="hp_mb10" src="img/worries_2.jpg" alt="関節可動域訓練">
            <p class="worries_txt hp_mb30">
                座位保持により体幹の筋力を鍛えることで、車イスで長時間座れるようになります。
            </p>

            <h2 class="worries_title hp_mb10 thick_white"><span class="worries_num">悩み3</span>　車いすへ移ることができない</h2>
            <h2 class="worries_sub_title hp_mb10 text_center thick_blue">移乗動作訓練</h2>
            <img class="hp_mb10" src="img/worries_3.jpg" alt="関節可動域訓練">
            <p class="worries_txt hp_mb30">
                立ち上がりの筋力強化および移乗動作の訓練をすることで、車イスへ移乗しやすくなります。</p>

            <h2 class="worries_title hp_mb10 thick_white"><span class="worries_num">悩み4</span>　車いすへ移ることができない</h2>
            <h2 class="worries_sub_title hp_mb10 text_center thick_blue">歩行訓練</h2>
            <img class="hp_mb10" src="img/worries_4.jpg" alt="関節可動域訓練">
            <p class="worries_txt hp_mb30">
                手摺や杖を使って歩行の練習を行います。
            </p>

            <h2 class="worries_title hp_mb10 thick_white"><span class="worries_num">悩み5</span>　むくみやからだの痛みが大変</h2>
            <h2 class="worries_sub_title hp_mb10 text_center thick_blue">マッサージ・はりきゅう</h2>
            <img class="hp_mb10" src="img/worries_5.jpg" alt="関節可動域訓練">
            <p class="worries_txt hp_mb30">
                痛みの緩和やむくみの改善のためにマッサージやはりきゅうを行います。
            </p>
        </div>
    </section>

    <!-- 連絡 -->
    <div class="wrapper wrapper_650 hp_mb10 text_center">
        <a href="tel:0428162874">
            <img src="img/tel.png" alt="電話番号">
        </a>    
    </div>

    <!--出勤表 -->
    <div class="wrapper wrapper_650 hp_mb20 text_center">
        <img src="img/shift.png" alt="出勤表">
    </div>

    <!-- お伺い -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">わたしたちがお伺いいたします！</h3>
        <div class="wrapper wrapper_900">
            <div class="container hp_mb20">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <img src="img/staff1.jpg" alt="画像">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <p class="visit_name thick">小林　司</p>
                    </div>
                </div>
                <p class="visit_txt hp_mb20">
                    小林です！リハビリや介護はチームアプローチです。利用者様・ご家族様のお悩みを解決するため、医療・介護と連携を図りながら、利用者様のできることを増やすためのサポートをさせていただきます。
                </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <img src="img/staff2.jpg" alt="画像">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <p class="visit_name thick">松ケ野　雄二</p>
                    </div>
                </div>
                <p class="visit_txt">
                    鍼灸マッサージ師の松ケ野です。鍼灸と機能訓練を組み合わせたリハビリで、利用者様が少しでも自立できるようにお手伝いさせて頂きます。
                </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <img src="img/staff3.jpg" alt="画像">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <p class="visit_name thick">大友　里美</p>
                    </div>
                </div>
                <p class="visit_txt">
                    大友です。利用者様の笑顔を見るのがこの仕事のいちばんのやりがいで大好きです。患者様とご家族様の日常の苦痛を軽減して、笑顔で過ごせるお手伝いをさせていただきます。
                </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <img src="img/staff4.jpg" alt="画像">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <p class="visit_name thick">高橋　誠</p>
                    </div>
                </div>
                <p class="visit_txt">
                    高橋誠と申します。自分の機能訓練やマッサージで、患者様が出来る事を増えたり、ご家族様の介助の負担を軽減して、少しでも生活の向上につながるようにサポートさせていただきます。
                </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <img src="img/staff5.jpg" alt="画像">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <p class="visit_name thick">西村　一生</p>
                    </div>
                </div>
                <p class="visit_txt">
                    西村と申します。介護は利用者様とご家族をセットでケアするものだと考えています。リハビリの専門家として、リハビリやマッサージで利用者様が少しでも
できることが増えるようにするだけでなく、ご家族の介助負担を減らせるよに全力を尽くします。
                </p>
            </div>
        </div>
    </section>

    <!-- エリア -->
    <section class="hp_mb50">
        <h3 class="max-txt blue-bg-ttl">こちらのエリアで<br class="d-sm-none">ご訪問させていただきます！</h3>
        <div class="wrapper wrapper_1200">
            <h2 class="text_center area_title hp_mb20 thick">神奈川県相模原市中央区・南区・緑区</h2>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87327.08488133826!2d139.2388636338918!3d35.57068510347404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191b3fdc3418d1%3A0xfe65b16187c0be03!2z56We5aWI5bed55yM55u45qih5Y6f5biC!5e0!3m2!1sja!2sjp!4v1630150718516!5m2!1sja!2sjp&q=35,139" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            <!-- <img src="img/map.png" alt="グーグルマップ"> -->
            <div id='map' style='width:100%; height:500px;'><br /></div>
            <!-- <iframe class="area__map" src="https://www.google.com/maps/d/embed?mid=1iwNpc45s6dprDttlGg2c9Vjc46QGPUnb&hl=ja" width="100%" height="480"></iframe> -->
        </div>
    </section>

    <script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11.5,
        center: {lat: 35.567, lng: 139.345},
        mapTypeId: 'terrain'
        });

        var citymap = {
        a: {
            center: {lat: 35.567, lng: 139.345},
            radius: 7000
        },
        };

        for (var city in citymap) {
        var cityCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 1,
            fillColor: '#FFFF00',
            fillOpacity: 0.30,
            map: map,
            center: citymap[city].center,
            radius: citymap[city].radius
        });
        }
    }
    </script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLDMObcRdJ8wkuv5JCqfOyYRvXJ0w5xDg&callback=initMap">
    </script>


    <!-- 料金 -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">料金はどれくらいで受けられるの？</h3>
        <div class="wrapper wrapper_900">
            <p class="c_cost__top hp_mb20 thick">
                健康保険適用のため、病院の窓口と同じ負担割合で受け取ることができます。
            </p>
        </div>
        <p class="c_cost__ttl thick_blue">
            健康保険適用
            <br>1回400円程度
            <br><small>(※1割負担の場合)</small>
        </p>
        <div class="wrapper wrapper_900">
            <div class="c_cost__txts">
                <img data-src="img/icon-check2.png" alt="チェックマーク" class="c_cost__icon">
                <p class="c_cost__txt thick">健康保険適用のため、病院の窓口と同じ負担割合で受けることができます。</p>
            </div>
            <div class="c_cost__txts">
                <img data-src="img/icon-check2.png" alt="チェックマーク" class="c_cost__icon">
                <p class="c_cost__txt thick">低価格で受けられるため、長期的なリハビリの継続ができます。</p>
            </div>
        </div>
    </section>
        

    <!-- 無料１ -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">障がい者手帳をお持ちの方は無料</h3>
        <p class="c_cost__ttl thick_blue">
            障がい者手帳
            <br>1･2級所持の方
            <br><small>無料</small>
        </p>
        <div class="wrapper wrapper_900">
            <div class="c_cost__txts">
                <img data-src="img/icon-check2.png" alt="チェックマーク" class="c_cost__icon">
                <p class="c_cost__txt thick">この受給者証をお持ちの方は、リハビリやマッサージを無料で受けることができます。</p>
            </div>
            <div class="c_cost__txts">
                <img data-src="img/icon-check2.png" alt="チェックマーク" class="c_cost__icon">
                <p class="c_cost__txt thick">障がい者手帳１・２級者および３級の方も一部無料になりますのでご確認ください。</p>
            </div>
        </div>
    </section>

    <!-- 無料２ -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">こちらの受給者証を<br>お持ちの方は<span class="c_free__yellow thick_yellow">無料</span>です</h3>
        <div class="wrapper wrapper_900">
            <div class="c_free__txt thick">重度心身障害医療費受給者証</div>
            <img data-src="img/techou.png" alt="重度心身障害医療費受給者証の写真" class="c_free__img">
        </div>
    </section>

    <!-- 質問 -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">よくある質問</h3>
        <div class="wrapper wrapper_900">
            <div class="c_faq__list acc">
                <button class="c_faq__content c_faq__content_top acc__btn">
                    <p class="c_faq__left c_faq__left_top">Q1</p>
                    <p class="c_faq__right c_faq__right_top thick_blue">１回の料金はいくらですか？</p>
                </button>
                <div class="acc__acc">
                    <div class="c_faq__content c_faq__content_bottom acc__inner acc__inner_close">
                        <p class="c_faq__left c_faq__left_bottom">A1</p>
                        <p class="c_faq__right c_faq__right_bottom">主治医の同意の元、健康保険が適用されるため１割負担の方で１回300～400円程度で受けることができます。</p>
                    </div>
                </div>
            </div>
            <div class="c_faq__list acc">
                <button class="c_faq__content c_faq__content_top acc__btn">
                    <p class="c_faq__left c_faq__left_top">Q2</p>
                    <p class="c_faq__right c_faq__right_top thick_blue">施術者の交通費はかかりますか？</p>
                </button>
                <div class="acc__acc">
                    <div class="c_faq__content c_faq__content_bottom acc__inner acc__inner_close">
                        <p class="c_faq__left c_faq__left_bottom">A2</p>
                        <p class="c_faq__right c_faq__right_bottom">交通費も料金に含まれているので、交通費込みで１回300～400円（１割負担の場合）になります。</p>
                    </div>
                </div>
            </div>
            <div class="c_faq__list acc">
                <button class="c_faq__content c_faq__content_top acc__btn">
                    <p class="c_faq__left c_faq__left_top">Q3</p>
                    <p class="c_faq__right c_faq__right_top thick_blue">お支払い方法はどうなりますか？</p>
                </button>
                <div class="acc__acc">
                    <div class="c_faq__content c_faq__content_bottom acc__inner acc__inner_close">
                        <p class="c_faq__left c_faq__left_bottom">A3</p>
                        <p class="c_faq__right c_faq__right_bottom">月末に請求書をお渡しするので、そのときか、もしくは翌月の施術時にお支払いください。</p>
                    </div>
                </div>
            </div>
            <div class="c_faq__list acc">
                <button class="c_faq__content c_faq__content_top acc__btn">
                    <p class="c_faq__left c_faq__left_top">Q4</p>
                    <p class="c_faq__right c_faq__right_top thick_blue">１回の施術時間は何分ですか？</p>
                </button>
                <div class="acc__acc">
                    <div class="c_faq__content c_faq__content_bottom acc__inner acc__inner_close">
                        <p class="c_faq__left c_faq__left_bottom">A4</p>
                        <p class="c_faq__right c_faq__right_bottom">１回３０分程度です。訪問先に到着して帰るまでの間で30分程度です。</p>
                    </div>
                </div>
            </div>
            <div class="c_faq__list acc">
                <button class="c_faq__content c_faq__content_top acc__btn">
                    <p class="c_faq__left c_faq__left_top">Q5</p>
                    <p class="c_faq__right c_faq__right_top thick_blue">介護施設内でも受けられますか？</p>
                </button>
                <div class="acc__acc">
                    <div class="c_faq__content c_faq__content_bottom acc__inner acc__inner_close">
                        <p class="c_faq__left c_faq__left_bottom">A5</p>
                        <p class="c_faq__right c_faq__right_bottom">もちろん受けることができます。在宅以外で訪問できる介護施設は、特養、ショートステイ、有料老人ホーム、グループホーム、サ高住などです。訪問できない施設は、病院、介護老人保険施設、デイサービスなどです。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 問い合わせ -->
    <section id="inquiry" class="hp_mb50">
        <h3 class="blue-bg-ttl">メールでのお問い合わせはこちら</h3>
        <div class="wrapper wrapper_900">
            <form action="mail/php/mailform.php" method="post" id="mail_form">
                <dl>
                    <dt>名前</dt>
                    <dd class="required"><input type="text" id="name_1" name="name_1" placeholder="佐藤"　value="" /> <input type="text" id="name_2" name="name_2" placeholder="たろう"　value="" /></dd>
                    <dt>メールアドレス</dt>
                    <dd class="required"><input type="email" id="mail_address" name="mail_address" placeholder="info@xxx.jp"　value="" /></dd>
                    <dt>メールアドレス<br />(確認用)</dt>
                    <dd><input type="email" id="mail_address_confirm" name="mail_address_confirm" placeholder="info@xxx.jp"　value="" /></dd>
                    <dt>郵便番号</dt>
                    <dd class="required"><input type="text" id="postal" name="postal" placeholder="ハイフン不要"　value="" onkeyup="AjaxZip3.zip2addr( this,'','address','address' );" />　<a href="http://www.post.japanpost.jp/zipcode/" target="_blank">郵便番号検索</a></dd>
                    <dt>住所</dt>
                    <dd><input type="text" id="address" name="address" placeholder="神奈川県相模原市"　value="" /></dd>
                    <dt>電話番号</dt>
                    <dd><input type="tel" id="phone" name="phone" placeholder="ハイフン不要"　value="" /></dd>
                    <dt>お問い合わせの内容</dt>
                    <dd class="required"><textarea id="contents" name="contents" placeholder="お困りになっている方の状態や症状を記載ください"　cols="40" rows="5"></textarea></dd>
                </dl>
                <p id="form_submit"><input type="button" id="form_submit_button" value="送信する" /></p>
            </form>
            <script src="mail/js/mailform-js.php"></script>
            
            <!-- フリガナ自動入力ライブラリここから -->
            <script src="mail/js/jquery.autoKana.js"></script>
            <script>
                (function( $ ) {
                    $.fn.autoKana( '#name_1', '#read_1', {
                        katakana: false
                    });
                    $.fn.autoKana( '#name_2', '#read_2', {
                        katakana: false
                    });
                })( jQuery );
            </script>
            <!-- フリガナ自動入力ライブラリここまで -->

            <!-- 住所自動入力ライブラリここから -->
            <script src="mail/js/ajaxzip3.js"></script>
            <!-- 住所自動入力ライブラリここまで -->

            <!-- ご希望の日時選択ライブラリここから -->
            <script src="mail/js/jquery.datetimepicker.js"></script>
            <script>
                (function( $ ) {
                    $( 'input#schedule' ).datetimepicker({
                        lang: 'ja'
                    });
                })( jQuery );
            </script>
            <!-- ご希望の日時選択ライブラリここまで -->
        </div>
    </section>

    <!-- 所在地 -->
    <section class="hp_mb50">
        <h3 class="blue-bg-ttl">所在地</h3>
        <!-- フッター -->
        <div class="c_footer wrapper wrapper_900">
            <dl class="c_footer__list">
                <dt class="c_footer__title text_center">名前</dt>
                <dd class="c_footer__txt">相模原訪問リハビリセンター</dd>
            </dl>
            <dl class="c_footer__list">
                <dt class="c_footer__title text_center">電話番号</dt>
                <dd class="c_footer__txt">042-816-2874</dd>
            </dl>
            <dl class="c_footer__list">
                <dt class="c_footer__title text_center">住所</dt>
                <dd class="c_footer__txt">
                    〒252-0303 <br>
                    神奈川県相模原市南区相模大野<br>
                    6-23-15-1008
                </dd>
            </dl>
            <dl class="c_footer__list">
                <dt class="c_footer__title text_center">営業時間</dt>
                <dd class="c_footer__txt">
                    月〜土(電話受け付け年中無休)<br>
                    9:00〜20:00
                </dd>
            </dl>
        </div>
    </section>

    <!-- フッター -->
    <footer>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 c_footer__left text_center">
                <a href="#inquiry">
                    <div class="row">
                        <div class="col-3">
                            <img class="footer_img" src="img/footer1.png" alt="フッター1">
                        </div>
                        <div class="col-6 px_0 text_center">
                            無料相談をする
                        </div>
                        <div class="col-3 px_0">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 c_footer__right text_center">
                <a href="tel:042-816-2874">
                    <div class="row">
                        <div class="col-3">
                            <img class="footer_img" src="img/footer2.png" alt="フッター2">
                        </div>
                        <div class="col-6 px_0 text_center">
                            今すぐ電話する
                        </div>
                        <div class="col-3 px_0">
                            <img class="footer_img" src="img/footer3.png" alt="フッター3">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </footer>

</body>
<script src="./js/script.js"></script>
<script src="./js/animate.js"></script>

</html>