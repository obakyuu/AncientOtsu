<?php
//タイトル
$title = "大伴遺跡";
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

    <!-- スライド -->
    <div class="uk-position-relative uk-light" uk-slideshow="animation: push; autoplay: true; ratio: 7:3">

        <ul class="uk-slideshow-items uk-box-shadow-medium">
            <li>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        <div class="uk-position-bottom-center uk-position-small">
            <ul class="uk-dotnav">
                <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
            </ul>
        </div>

    </div>

    <!-- タイトル -->
    <div class="uk-margin-small-top">
        <h2 class="uk-margin-remove">大伴遺跡</h2>
        <h5 class="uk-margin-remove">おおともいせき</h5>
    </div>

    <!--タブ-->
    <ul class="uk-flex-center" uk-tab>
        <li class="uk-active"><a href="#">概要</a></li>
        <li><a href="#">所在地</a></li>
    </ul>

    <!--本文-->
    <ul class="uk-switcher uk-margin-medium">
        <li class="uk-animation-fade">
            <p>
                大伴遺跡とは、かつて西大津バイパス道路造成に伴い行われた発掘調査にて発見された弥生～鎌倉時代の生活遺跡である。
                現在は付近の道路造成も影響し、この遺跡は一切残っておらず現地にて確認する術はない。<br>
                なお、発掘時に福王子古墳17号墳(おそらく位置からすると大伴古墳群の１つに入るような気もするが、
                大伴古墳群という名前が正式な名前という感じではなさそうなので、ここでは福王子古墳の1つとして扱う)が発見された。
            <h4>参考資料</h4>
            <ul>
                <li>
                    大伴遺跡発掘調査報告<br>
                    <a href="https://sitereports.nabunken.go.jp/ja/2984" target="_blank"
                       style="word-break: break-all">https://sitereports.nabunken.go.jp/ja/2984</a>
                </li>
            </ul>
            </p>
        </li>

        <li class="uk-animation-fade">
            <div class="uk-child-width-expand">
                <iframe uk-height-viewport="offset-top: true"
                        src="https://www.google.com/maps/d/embed?mid=1Z7VizVWY1U4BSPuCqiySOdwertAWkCTv&z=19"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
            </div>
            <h3>近隣の史跡</h3>
            <ul>
                <li>福王子古墳群</li>
                <li>榿木原遺跡</li>
                <li>南滋賀町廃寺跡</li>
            </ul>
        </li>

    </ul>
</div>

<!-- フッター -->
<?php include $_ENV['ROOT']."include/footer.php"; ?>