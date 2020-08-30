<?php
//タイトル
$title = "榿木原遺跡";
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
                <img src="../image/hannokihara/cover/01.jpg" uk-cover>
            </li>
            <li>
                <img src="../image/hannokihara/cover/02.jpg" uk-cover>
            </li>
            <li>
                <img src="../image/hannokihara/cover/03.jpg" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        <div class="uk-position-bottom-center uk-position-small">
            <ul class="uk-dotnav">
                <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
                <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
                <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
            </ul>
        </div>

    </div>

    <!-- タイトル -->
    <div class="uk-margin-small-top">
        <h2 class="uk-margin-remove">榿木原遺跡</h2>
        <h5 class="uk-margin-remove">はんのきはらいせき</h5>
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
                京阪南滋賀駅から西に500m坂を上った先にあるかつて西大津バイパスに点在してた瓦窯群である。福王子神社鳥居すぐ向かい側にある。
                大津歴史博物館のデータベースによると発掘調査の結果、7世紀後半（白鳳時代、もしくは奈良時代）から10世紀（平安時代）にかけての瓦窯跡（合計10基）と複数の掘立柱建物跡（工房と推測）が発見された。
                南滋賀町廃寺にここで生産された瓦が供給されていたことが双方の発掘調査で判明している。<br>
                現在は、主要地方道下鴨・大津線沿いに一基（B支群4号窯）が移設され、現在も見ることができる。
            <h4>参考資料</h4>
            <ul>
                <li>
                    大津市歴史博物館 - 榿木原遺跡<br>
                    <a href="http://www.rekihaku.otsu.shiga.jp/db/jiten/data/072.html" target="_blank" style="word-break: break-all">http://www.rekihaku.otsu.shiga.jp/db/jiten/data/072.html</a>
                </li>
            </ul>
            </p>
        </li>
        <li class="uk-animation-fade">
            <div class="uk-child-width-expand">
                <iframe uk-height-viewport="offset: true" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1633.4108938003626!2d135.8538716582301!3d35.03618799125334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x60010b9a60eac595%3A0xd8d8dcec0c1abc38!2z5Y2X5ruL6LOA6aeF44CB44CSNTIwLTAwMTEg5ruL6LOA55yM5aSn5rSl5biC5Y2X5b-X6LOA77yT5LiB55uu77yR77yQ!3m2!1d35.036463499999996!2d135.8576551!4m5!1s0x60010b914f0daaab%3A0xf159446ac9ea2b66!2z5qa_5pyo5Y6f6YG66Leh44CB44CSNTIwLTAwMTEg5ruL6LOA55yM5aSn5rSl5biC77yR77yYIOWNl-W_l-izgO-8keS4geebru-8ke-8mA!3m2!1d35.0358374!2d135.8524788!5e0!3m2!1sja!2sjp!4v1589175798345!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <h3>近隣の史跡</h3>
            <ul>
                <li>福王子古墳群</li>
                <li>大伴(福王子北)古墳群</li>
                <li>南滋賀町廃寺跡</li>
            </ul>
        </li>
        <li class="uk-animation-fade">
            <iframe class="uk-width-expand uk-margin-medium-bottom"
                    src="https://www.google.com/maps/d/embed?mid=1M6bYTcUPVxKDuX4eYH8fguWaZv2rBx8l&z=18"
                    height="480"></iframe>
            <div uk-grid>
                <div class="uk-width-small@m">
                    <ul class="uk-tab-left uk-flex-center"
                        uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                        <li><a class="uk-text-center" href="#">周辺写真</a></li>
                        <li><a class="uk-text-center" href="#">瓦窯</a></li>
                        <li><a class="uk-text-center" href="#">説明板</a></li>
                    </ul>
                </div>
                <div class="uk-width-expand">
                    <ul id="component-tab-left" class="uk-switcher">
                        <li>
                            <h2>周辺</h2>
                            榿木原遺跡は現在は西大津バイパスになっており、この大津市の重要な主要道である。
                            史跡として確認する術は、移設された瓦窯と説明板のみである。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/001/P1030370.JPG"
                                       data-caption="入口の階段">
                                        <img src="../image/hannokihara/small/001/P1030370-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/001/P1030372.JPG"
                                       data-caption="西大津バイパス">
                                        <img src="../image/hannokihara/small/001/P1030372-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/001/P1030374.JPG"
                                       data-caption="通路">
                                        <img src="../image/hannokihara/small/001/P1030374-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/001/P1030390.JPG"
                                       data-caption="右のバイパス辺りに建物があった">
                                        <img src="../image/hannokihara/small/001/P1030390-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/001/P1030392.JPG"
                                       data-caption="この方向に瓦窯が4基(B支群)あったようだ">
                                        <img src="../image/hannokihara/small/001/P1030392-s.jpg" alt="05">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/001/P1030394.JPG"
                                       data-caption="ここに建物があった名残のようなものは一切見当たらない">
                                        <img src="../image/hannokihara/small/001/P1030394-s.jpg" alt="06">
                                    </a>
                                </div>
                            </div>

                        </li>
                        <li>
                            <h2>瓦窯</h2>

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/002/P1030375.JPG"
                                       data-caption="このサイトのロゴはこのサソリ文瓦をモチーフにしている">
                                        <img src="../image/hannokihara/small/002/P1030375-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/002/P1030376.JPG"
                                       data-caption="瓦窯の横からの全景">
                                        <img src="../image/hannokihara/small/002/P1030376-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/002/P1030386.JPG"
                                       data-caption="窯">
                                        <img src="../image/hannokihara/small/002/P1030386-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/002/P1030387.JPG"
                                       data-caption="窯の上側">
                                        <img src="../image/hannokihara/small/002/P1030387-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/002/P1030388.JPG"
                                       data-caption="段差の部分に瓦を立てて焼いていた">
                                        <img src="../image/hannokihara/small/002/P1030388-s.jpg" alt="05">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/002/P1030391.JPG"
                                       data-caption="見た目は土っぽい。堅そう。">
                                        <img src="../image/hannokihara/small/002/P1030391-s.jpg" alt="06">
                                    </a>
                                </div>
                            </div>

                        </li>
                        <li>
                            <h2>説明板</h2>

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/003/P1030378.JPG"
                                       data-caption="説明板">
                                        <img src="../image/hannokihara/small/003/P1030378-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/003/P1030379.JPG"
                                       data-caption="説明文">
                                        <img src="../image/hannokihara/small/003/P1030379-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/003/P1030380.JPG"
                                       data-caption="詳細図">
                                        <img src="../image/hannokihara/small/003/P1030380-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/003/P1030381.JPG"
                                       data-caption="発掘当時の全景">
                                        <img src="../image/hannokihara/small/003/P1030381-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/003/P1030382.JPG"
                                       data-caption="A支『群』は1基だけ？">
                                        <img src="../image/hannokihara/small/003/P1030382-s.jpg" alt="05">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/003/P1030383.JPG"
                                       data-caption="無学が故に見てもよくわからない">
                                        <img src="../image/hannokihara/small/003/P1030383-s.jpg" alt="06">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/003/P1030384.JPG"
                                       data-caption="B支群とC支群">
                                        <img src="../image/hannokihara/small/003/P1030384-s.jpg" alt="07">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/hannokihara/large/003/P1030385.JPG"
                                       data-caption="発掘当時の写真">
                                        <img src="../image/hannokihara/small/003/P1030385-s.jpg" alt="08">
                                    </a>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</div>

<!-- フッター -->
<?php include $_ENV['ROOT']."include/footer.php"; ?>