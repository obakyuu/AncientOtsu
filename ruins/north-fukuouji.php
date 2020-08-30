<?php
//タイトル
$title = "大伴古墳群";
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
                <img src="../image/north-fukuouji/cover/01.jpg" uk-cover>
            </li>
            <li>
                <img src="../image/north-fukuouji/cover/02.jpg" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        <div class="uk-position-bottom-center uk-position-small">
            <ul class="uk-dotnav">
                <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
                <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
            </ul>
        </div>

    </div>

    <!-- タイトル -->
    <div class="uk-margin-small-top">
        <h2 class="uk-margin-remove">大伴古墳群</h2>
        <h5 class="uk-margin-remove">おおともこふんぐん</h5>
    </div>

    <!--タブ-->
    <ul class="uk-flex-center" uk-tab>
        <li class="uk-active"><a href="#">概要</a></li>
        <li><a href="#">所在地</a></li>
        <li><a href="#">詳細</a></li>
    </ul>

    <!--本文-->
    <ul class="uk-switcher uk-margin-medium">
        <li class="uk-animation-fade">
            <p>
                京阪南滋賀駅から西に500m坂を上った先にある大友黒主神社から南西50m付近にある古墳群である。
                このページでは大伴古墳群と表記していますが、別名『福王子北(ふくおうじきた)古墳群』と呼称されることもあります。<br>
                川を隔てたところにある福王子古墳群とは異なり、この古墳群は具体的な場所がわかりづらいです。現地調査をしてみましたが、
                僅かに巨石と墳丘らしきもの？が確認できる程度でした。実際この古墳群の発掘調査を行われたかどうかはわからず、
                この古墳群に対する詳細な情報は残念ながら見つかりませんでした。
            <h4>参考資料</h4>
            <ul>
                <li>
                    野添古墳群発掘調査報告・福王子古墳群発掘調査報告<br>
                    <a href="https://sitereports.nabunken.go.jp/ja/2944" target="_blank"
                       style="word-break: break-all">https://sitereports.nabunken.go.jp/ja/2944</a>
                </li>
            </ul>
            </p>
        </li>

        <li class="uk-animation-fade">
            <div class="uk-child-width-expand">
                <iframe uk-height-viewport="offset-top: true"
                        src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1633.3993582730027!2d135.85365265823015!3d35.03676509123774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x60010b9a60eac595%3A0xd8d8dcec0c1abc38!2z5Y2X5ruL6LOA6aeF44CB44CSNTIwLTAwMTEg5ruL6LOA55yM5aSn5rSl5biC5Y2X5b-X6LOA77yT5LiB55uu77yR77yQ!3m2!1d35.036463499999996!2d135.8576551!4m5!1s0x60010b96a1b4b1fd%3A0xa6edd8a3257c2286!2z44CSNTIwLTAwMTEg5ruL6LOA55yM5aSn5rSl5biC5Y2X5b-X6LOA77yS5LiB55uu77yS77yU4oiS77yRIOWkp-S8tOm7kuS4u-elnuekvg!3m2!1d35.0370482!2d135.8518389!5e0!3m2!1sja!2sjp!4v1589191778407!5m2!1sja!2sjp"
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

        <li class="uk-animation-fade">
            <iframe class="uk-width-expand uk-margin-medium-bottom"
                    src="https://www.google.com/maps/d/embed?mid=1rW8BMcKpsfAic6LnWolxqldMtqjM_dzE&z=20"
                    height="480"></iframe>
            <div uk-grid>
                <div class="uk-responsive-width">
                    <h2>4基の古墳群</h2>
                    大伴古墳群は大伴神社のすぐ近くに独立した社があり唯一の目印です。社の周辺に古墳が総数4基が点在しています。
                    上記の地図では社を囲うように4基が点在していますが、実際囲うように古墳が点在しているか真偽はよくわかりませんでした。
                    それぐらい見つけるのが難しいです。

                    <div class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid uk-lightbox="animation: scale">
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030354.JPG" data-caption="おそらく3号墳">
                                <img src="../image/north-fukuouji/small/P1030354-s.jpg" alt="01">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030355.JPG" data-caption="石室の一部が突出している">
                                <img src="../image/north-fukuouji/small/P1030355-s.jpg" alt="02">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030356.JPG" data-caption="おそらくこれは古墳ではない">
                                <img src="../image/north-fukuouji/small/P1030356-s.jpg" alt="03">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030357.JPG" data-caption="木の根と一体化している">
                                <img src="../image/north-fukuouji/small/P1030357-s.jpg" alt="04">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030358.JPG" data-caption="社">
                                <img src="../image/north-fukuouji/small/P1030358-s.jpg" alt="05">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030359.JPG" data-caption="思ったより造りが簡素">
                                <img src="../image/north-fukuouji/small/P1030359-s.jpg" alt="06">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030360.JPG" data-caption="近くに墓地があります">
                                <img src="../image/north-fukuouji/small/P1030360-s.jpg" alt="07">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030361.JPG" data-caption="注連縄が千切れてます">
                                <img src="../image/north-fukuouji/small/P1030361-s.jpg" alt="08">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030362.JPG" data-caption="これが1号墳？墳丘っぽい">
                                <img src="../image/north-fukuouji/small/P1030362-s.jpg" alt="09">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030363.JPG" data-caption="それともこっちが1号墳？2号墳？">
                                <img src="../image/north-fukuouji/small/P1030363-s.jpg" alt="10">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030364.JPG" data-caption="...見つけるのは難しい">
                                <img src="../image/north-fukuouji/small/P1030364-s.jpg" alt="11">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030365.JPG" data-caption="どこの写真かわからなくなりました">
                                <img src="../image/north-fukuouji/small/P1030365-s.jpg" alt="12">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030366.JPG" data-caption="おそらくこの方向に古墳はない">
                                <img src="../image/north-fukuouji/small/P1030366-s.jpg" alt="13">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030367.JPG" data-caption="社の後ろから撮影">
                                <img src="../image/north-fukuouji/small/P1030367-s.jpg" alt="14">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="../image/north-fukuouji/large/P1030368.JPG" data-caption="全体的にわかりづらい写真で申し訳ありませんでした。">
                                <img src="../image/north-fukuouji/small/P1030368-s.jpg" alt="15">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<!-- フッター -->
<?php include $_ENV['ROOT']."include/footer.php"; ?>