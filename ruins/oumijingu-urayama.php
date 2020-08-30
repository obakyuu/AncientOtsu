<?php
//タイトル
$title = "近江神宮裏山古墳群";
//Composer
require_once '../vendor/autoload.php';
//.env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
//Header
include $_ENV['ROOT']."include/header.php";
?>

<!--本文-->
<div class="uk-container uk-margin-large<?= $style[0] ?> uk-animation-fade">

    <!--カバー-->
    <div class="uk-cover-container uk-box-shadow-medium">
        <canvas width="800" height="400"></canvas>
        <img src="" alt="" uk-cover>
    </div>
    <div class="uk-margin-small-top">
        <h2 class="uk-margin-remove">近江神宮裏山古墳群</h2>
        <h5 class="uk-margin-remove">おうみじんぐううらやまこふんぐん</h5>
    </div>

    <!--タブ-->
    <ul class="uk-flex-center" uk-tab>
        <li class="uk-active"><a href="#">概要</a></li>
        <li><a href="#">所在地</a></li>
    </ul>

    <!--本文-->
    <ul class="uk-switcher uk-margin-medium">
        <li class="uk-animation-fade">
            <h3 class="uk-heading-bullet">注意書き</h3>
            <ul>
                <li><b>この情報はデマの可能性があります。</b>そのため通常の方法で当ページを掲載はせず、隠して公開しております。</li>
                <li>現地への調査が難しいため調査はしておりません。あくまで『そこに遺跡があるかもしれない。』と留意するに留めておきましょう。</li>
            </ul>
            <h3 class="uk-heading-bullet">詳細</h3>
            <p>
                この情報は『公益財団法人滋賀県文化財保護協会の紀要第22号 渡来人の墓』の3Pの史跡地図28番目に表記されています。
                位置からして、おそらく榿木原遺跡のすぐ近くに存在している？ように見えますが、実際どこにあるのかはよくわかりません。
            </p>
            <h3 class="uk-heading-bullet">調査</h3>
            <p>
                榿木原遺跡へ調査した次いで、裏山古墳群があると思われる場所へ赴きましたが、その場所は深い竹藪になっており、入口らしい入口はありませんでした。
                この時は、比叡平へ向かう山中越えの道路から向かいましたが、歩道がない上に車通りも激しいので非常に危険です。<br>
                近江神宮境内から向かうなら可能かもしれませんが、実際行けるかどうかはわかりません。
            </p>
            <h3 class="uk-heading-bullet">妥当性</h3>
            <p>
                次に妥当性についてですが、ここに古墳はあってもおかしくはありません。このサイトをよく見てる人はわかると思いますが、
                大津市の古墳は比叡山麓に特に集中していることが多いです。別にあってもおかしくはないと思います。<br>
                ただ、ひとつ気になることがあります。それは『なぜ西大津バイパス道路造成時に発掘調査が行われなかったのか？』その理由は定かではありません。
                例として、近くになる榿木原遺跡、福王子古墳群などはバイパス工事時に発掘調査を行われましたが、この古墳群に関しては、前述の保護協会の記録以外の情報はありません。
                その上、発掘調査が行われた記録も見つかりませんでした。
            </p>
            <h3 class="uk-heading-bullet">参考資料</h3>
            <ul>
                <li>
                    公益財団法人滋賀県文化財保護協会　紀要第22号　渡来人の墓<br>
                    <a href="http://shiga-bunkazai.jp/download/kiyou/22_hori.pdf" target="_blank"
                       style="word-break: break-all">http://shiga-bunkazai.jp/download/kiyou/22_hori.pdf</a>
                </li>
            </ul>
        </li>
        <li class="uk-animation-fade">
            <div class="uk-child-width-expand">
                <iframe uk-height-viewport="offset: true"
                        src="https://www.google.com/maps/d/embed?mid=1L9hT8cE3MP6WX5cO_ziNzgXlTrQk5BbX&z=18"></iframe>
            </div>
            <h3>近隣の史跡</h3>
            <ul>
                <li>榿木原遺跡</li>
                <li>福王子古墳群</li>
                <li>大伴(福王子北)古墳群</li>
                <li>南滋賀町廃寺跡</li>
            </ul>
        </li>
    </ul>
</div>
<!-- フッター -->
<?php include $_ENV['ROOT']."include/footer.php"; ?>