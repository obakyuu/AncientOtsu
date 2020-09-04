<?php
//タイトル
$title = "古代大津史";
//Composer
require_once __DIR__.'/vendor/autoload.php';
//.env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//Header
include $_ENV['ROOT']."include/header.php";
?>
<!--スライドショー-->
<div uk-slideshow="animation: push; autoplay: true" class="uk-light uk-animation-fade uk-box-shadow-large">
    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true">
        <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-center">
                <img src="image/top/00.jpg" uk-cover>
            </div>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom-right uk-position-small"
                 uk-slideshow-parallax="x: 500,-500">
                <h3 class="uk-margin-remove">大津の夜景</h3>
                <p class="uk-margin-remove">提供: Ecru</p>
            </div>
        </li>
        <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-scale-up">
                <img src="image/top/01.jpg" uk-cover>
            </div>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom-right uk-position-small"
                 uk-slideshow-parallax="x: 500,-500">
                <h3 class="uk-margin-remove">雪解け</h3>
                <p class="uk-margin-remove">撮影日：19/4/3</p>
            </div>
        </li>
        <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-center">
                <img src="image/top/02.jpg" uk-cover>
            </div>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom-right uk-position-small"
                 uk-slideshow-parallax="x: 500,-500">
                <h3 class="uk-margin-remove">鋭利開発中</h3>
                <p class="uk-margin-remove">
                    完成まで時間がかかります。気長にお待ちください。
                </p>
            </div>
        </li>
        <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
                <img src="image/top/03.jpg" uk-cover>
            </div>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom-right uk-position-small"
                 uk-slideshow-parallax="x: 500,-500">
                <h3 class="uk-margin-remove">金仙滝</h3>
                <p class="uk-margin-remove">崇福寺建立と深く関係しています</p>
            </div>
        </li>
    </ul>
    <!-- スクロール -->
    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
</div>

<!-- import -->
<div class="uk-container uk-margin-large">
<?php
//お知らせ
include "notice.html";
//リニューアル
include "renewal.html";
//開発段階表記
include "development.html";
//Weather
include "weather.php";
?>
</div>

<!-- 写真下のコンテンツ -->
<div class="uk-container uk-margin-large<?= $style[0] ?>">
    <!-- 本文 -->
    <div>
        <h2 class="uk-heading-bullet">挨拶</h2>
        <p>
            はじめまして『古代大津史』を運営する者です。このサイトは滋賀県大津市に特化。古墳時代をメインに取り扱う、ちょっと”変わった”サイトです。
            どこのサイトよりも詳しく、わかりやすく、使いやすさを目指して運営していきます。
        </p>
        <h2 class="uk-heading-bullet">目的</h2>
        <p>
            <ol>
                <li>古代大津の歴史を記録する</li>
        <p>
            私は20年近く、ここ大津市に生まれ住んでいる一市民ですが、単刀直入に言うと大津の歴史について詳しく知る人は少ないという印象を受けます。
            歴史に対する考えは人それぞれですが、思った以上に関心がない。そんな雰囲気を感じることがあります。
            ここ大津市は、古代に限らず日本の長い歴史において度々主要な地域となりました。その長い歴史の名残は町の至る所に点在していますが、
            それが一体何なのか？考えたことがある人はそういないのかもしれません。というより、そもそもこれが史跡？と思うことも。
            大津市には多くの史跡が存在しています。しかし、すべての史跡に説明がついているというわけもでありません。
            理由は単純であまりにも数が多いからです。そんな史跡群をどのサイトより詳しく説明、記録を残すことで、
            より多くの人たちに知ってもらう。その援助をできればと思います。
        </p>
        <li>フィールドワークの最適化</li>
        <p>
            最新の技術を用いることで、パソコンだけでなく、スマートフォン、タブレットからの閲覧も最適化。
            デバイスを片手に現地での史跡説明や、Googleマップを利用した史跡、遺構を1つ1つ丁寧に探索できるように配慮します。
            現地に行く際は是非このサイトを活用してください。GPSの有効化も忘れずに。
        </p>
        </ol>
        </p>
        <h2 class="uk-heading-bullet">協賛</h2>
        <p>
            当サイトの開発協力をしてくださった方々に敬意を表し、ここに記載させていただきます。
            この場をお借りしてお礼申し上げます。本当にありがとうございました。
        </p>

        <div class="uk-flex uk-flex-wrap uk-flex-wrap-around">
            <div class="uk-width-1-2@m">
                <article class="uk-comment uk-visible-toggle" tabindex="-1">
                    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-comment-avatar" src="image/avatar/ecru.jpg" width="80" height="80"
                                 alt="">
                        </div>
                        <div class="uk-width-expand">
                            <h4 class="uk-comment-title uk-margin-remove">Ecru</h4>
                            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                <li>プロカメラマン</li>
                            </ul>
                        </div>
                    </header>
                    <!--
                    <div class="uk-comment-body">
                        <p>今は会うことが難しいけど、また会いましょう。</p>
                    </div>
                    -->
                </article>
            </div>

            <div class="uk-width-1-2@m">
                <article class="uk-comment uk-visible-toggle" tabindex="-1">
                    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <span uk-icon="icon: user; ratio: 4"></span>
                        </div>
                        <div class="uk-width-expand">
                            <h4 class="uk-comment-title uk-margin-remove">匿名希望</h4>
                            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                <li>Webサイト構築技術全般</li>
                            </ul>
                        </div>
                    </header>
                    <!--
                    <div class="uk-comment-body">
                        <p>いろいろお世話になりました！感謝してもしきれません。それほどお世話になりました。</p>
                    </div>
                    -->
                </article>
            </div>
        </div>
    </div>

</div>

<!--フッター-->
<?php include $_ENV['ROOT']."include/footer.php" ?>