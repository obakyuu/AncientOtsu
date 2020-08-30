<?php
//タイトル
$title = "水車谷古墳";
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
    <div class="uk-position-relative uk-light" uk-slideshow="animation: push; autoplay: true">

        <ul class="uk-slideshow-items uk-box-shadow-medium">
            <li>
                <img src="../image/suishadani/01.png" alt="滋賀文化財だより No.4" uk-cover>
            </li>
            <li>
                <img src="../image/suishadani/02.png" alt="滋賀文化財だより No.4 - map" uk-cover>
            </li>
            <li>
                <img src="../image/suishadani/03.png" alt="滋賀文化財だより No.26" uk-cover>
            </li>
            <li>
                <img src="../image/suishadani/04.png" alt="滋賀文化財だより No.26 - map" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        <div class="uk-position-bottom-center uk-position-small">
            <ul class="uk-dotnav">
                <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
                <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
                <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
                <li uk-slideshow-item="3"><a href="#">Item 4</a></li>
            </ul>
        </div>

    </div>

    <!-- タイトル -->
    <div class="uk-margin-small-top">
        <h2 class="uk-margin-remove">水車谷(部屋ヶ谷)古墳</h2>
        <h5 class="uk-margin-remove">すいしゃだに(へやがたに)こふん</h5>
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
                <h3><b>この記事は現在検証中です。</b></h3>
                <ul>
                    <li>この記事は、内容の正確性が非常に欠けており誤りの可能性が非常に高いです。</li>
                    <li>『この古墳は1つの古墳である』とも限りません。タイトルでは、水車谷古墳の別名称として部屋ヶ谷古墳と記載していますが、
                        別名称ではなく別々の古墳の可能性があります。そのため、<b>ここからは水車谷古墳と部屋ヶ谷古墳それぞれを別古墳として取り扱います。</b>
                        読解の際に注意してください。</li>
                </ul>
            </p>
            <p>
                この水車谷古墳に関する発掘報告書は発見されておらず、発見できたのは他の報告書の周辺史跡地図におまけ程度に記載されているときでした。
                下記の参考資料が、その水車谷と部屋ヶ谷を取り扱った資料である。しかし、その3つともどれも微妙に内容が異なっているのである。
                全国遺跡報告総覧の資料によると、水車谷と部屋ヶ谷は2つ別々の古墳として取り扱われており、水車谷古墳は早尾神社境内裏に
                存在、部屋ヶ谷はもっと別の場所にあり、柳川中流の山腹(?)に存在するとだけ明示されていた。
            </p>
            <p>
                滋賀文化財だよりでは、地図だけでなく当時の古墳の状況も掲載されていた。No.4とNo.26に記載されている。<br>
                No.4は、大津市のドーム状古墳でこの古墳は最南端に位置することと、古墳群ではなく、単体の古墳のみ構成されていることに
                何か重要な意味があるのではなかったのかと憂いている様子が記載されている。<br>
                No.26では、標高測定と時代推定、古墳の規模、付近の調査等が記載されている。<br>
            </p>
            <p>
                ここからは考察ですが、滋賀文化財だよりの記事を拝見した際、どちらも同じ古墳のようには見えませんでした。<br>
                No.4の写真では、羨道は残っているものの、墳丘はほぼ崩れており、特に右の傾斜側の崩れが顕著に表れている。
                そして、古墳の後ろには山々が見えることから開けた場所（山の山頂？）に存在するのでは？と印象を持った。<br>
                一方、No.26では墳丘がなだらかに綺麗に残っており、羨道も残っている。古墳はどうやら平坦な場所にあるように見え、
                周りは竹藪におおわれており、どうも開けた場所にあるようには見えない。<br>
                この2つの記事で扱っている古墳は、おそらく別々の古墳ではないかと思われる。
            </p>
            <p>
                以上の観点から考察するに、おそらく水車谷古墳と部屋ヶ谷古墳は別々にどこかに存在しているのではないかと考えている。<br>
                ただ、それがどこにあるかについては未だわからない。
            </p>
            <h4>参考資料</h4>
            <ul>
                <li>
                    全国遺跡報告総覧 - 大伴遺跡発掘調査報告(P12)<br>
                    <a href="https://sitereports.nabunken.go.jp/ja/2984" target="_blank" style="word-break: break-all">https://sitereports.nabunken.go.jp/ja/2984</a>
                </li>
                <li>
                    滋賀文化財だより - No4.大津市錦織1丁目水車谷古墳(P3)<br>
                    <a href="http://shiga-bunkazai.jp/download/dayori/001.pdf" target="_blank" style="word-break: break-all">http://shiga-bunkazai.jp/download/dayori/001.pdf</a>
                </li>
                <li>
                    滋賀文化財だより - No.26大津市山上町所在部屋ヶ谷（別名水車谷）古墳について(P4)<br>
                    <a href="http://shiga-bunkazai.jp/download/dayori/012.pdf" target="_blank" style="word-break: break-all">http://shiga-bunkazai.jp/download/dayori/012.pdf</a>
                </li>
            </ul>
        </li>
        <li class="uk-animation-fade">
            <div class="uk-child-width-expand">
                <iframe uk-height-viewport="offset: true" src="https://www.google.com/maps/d/embed?mid=1af5zuO0Y7gO8CtoOHRUR3I7ZOo70XcwY&z=17"></iframe>
            </div>
            <h3>近隣の史跡</h3>
            <ul>
                <li>準備中</li>
            </ul>
        </li>

    </ul>

</div>

<!-- フッター -->
<?php include $_ENV['ROOT']."include/footer.php"; ?>