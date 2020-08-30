<?php
//変数
$theme = 0;             //(0:White / 1:Black)
$style = array();       //文字配列の初期化

//Form(Post)
if (isset($_POST['theme'])) {
    //POSTから取得
    $theme = $_POST['theme'];
} else {
    //POSTから受け取れない場合は,Cookieから取得
    if (isset($_COOKIE['theme'])) {
        //正常に取得
        $theme = $_COOKIE['theme'];
    }
}

//CookieSave(1week)
setcookie("theme", $theme, time() + (((60 * 60) * 24) * 7), "/", "eriel.net", true, false);

//BlackTheme
if ($theme == 1) {
    $style[0] = " uk-light";
    $style[1] = " uk-background-secondary";
    $style[2] = ";" . $style[0] . $style[1];
}

//地区配列
$district = ["石山地区", "粟津/晴嵐地区", "膳所地区", "錦織/皇子山地区", "南志賀地区", "滋賀里地区", "穴太地区", "坂本地区", "日吉地区", "雄琴地区", "仰木地区", "堅田地区", "真野地区"];

//史跡配列(奇数:史跡名/偶数:ファイル名) ※[none]はまだコンテンツ未作成
$ruin = [
    ["石山貝塚", "none", "蛍谷遺跡", "none"],
    ["粟津湖底遺跡", "none", "国分大塚古墳", "none"],
    ["茶臼山古墳・小茶臼山古墳", "none"],
    ["近江大津宮錦織遺跡", "none", "皇子山古墳群", "oujiyama", "宇佐山古墳群", "usayama", "山田古墳群", "yamada", "水車谷(部屋ヶ谷)古墳", "suishadani"],
    ["南志賀遺跡", "none", "南滋賀町廃寺", "minamishiga_haiji", "榿木原遺跡", "hannokihara", "福王子古墳群", "fukuouji", "大伴古墳群", "north-fukuouji", "大伴遺跡", "ootomo", "近江神宮裏山古墳群", "oumijingu-urayama"],
    ["長尾池ノ内古墳群", "none", "太鼓塚古墳群(高砂古墳公園)", "taikoduka", "宮ノ内古墳群", "miyanouchi", "滋賀里遺跡", "none", "百穴古墳群", "hyaketsu", "崇福寺跡", "sufukuji", "桐畑(熊ケ谷)古墳群", "kirihata", "大通寺古墳群", "daitsuji", "赤塚古墳(倭神社)", "none", "大谷西古墳群", "none", "小山古墳群", "none", "大谷南古墳群", "none", "大谷南遺跡", "none", "大谷古墳群", "none", "大谷遺跡", "none"],
    ["穴太廃寺跡", "none", "穴太飼込古墳群", "none", "穴太野添古墳群", "none", "壺笠山城跡", "none", "中山古墳群", "none", "塚穴(矢倉)古墳群", "none"],
    ["袋古墳緑地", "none", "裳立山古墳群", "none", "天神山古墳群", "none", "裳立山東古墳群", "none", "嶽古墳", "none", "木の岡古墳群", "none"],
    ["平石古墳", "none", "明良古墳群", "none", "讃仏堂古墳群", "none", "眞葛原古墳群", "none", "衣掛岩古墳群", "none", "日吉古墳群", "none"],
    ["雄琴段々遺跡", "none"],
    ["古墳公園", "none", "西羅古墳群", "none", "衣川廃寺跡", "none"],
    ["春日山古墳群", "none", "真野廃寺", "none", "中村遺跡", "none"],
    ["唐臼山古墳群", "none", "和邇大塚古墳", "none", "ゼニワラ古墳", "none", "曼陀羅山北古墳群", "none", "真野北古墳公園", "none", "石釜古墳群", "none", "石神古墳群", "none", "道風神社古墳群", "none", "神田遺跡", "none", "真野遺跡", "none", "真野古墳", "none"]
];

//MobileDetect(デバイス情報の取得)
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    if ($detect->isTablet()) {
        $device = '<span class="uk-margin-small-right" uk-icon="tablet"></span>タブレット';
    } else {
        $device = '<span class="uk-margin-small-right" uk-icon="phone"></span>スマートフォン';
    }
} else {
    $device = '<span class="uk-margin-small-right" uk-icon="desktop"></span>PC';
}

//ブラウザ情報の取得
$browser = strtolower($_SERVER['HTTP_USER_AGENT']);
// ユーザーエージェントの情報を基に判定
if (strstr($browser, 'edge')) {
    $browser_info = '<i class="fab fa-edge"></i> Edge';
} elseif (strstr($browser, 'trident') || strstr($browser, 'msie')) {
    $browser_info = '<i class="fab fa-internet-explorer"></i> Internet Explorer';
} elseif (strstr($browser, 'chrome')) {
    $browser_info = '<i class="fab fa-chrome"></i> Google Chrome';
} elseif (strstr($browser, 'firefox')) {
    $browser_info = '<i class="fab fa-firefox"></i> Firefox';
} elseif (strstr($browser, 'safari')) {
    $browser_info = '<i class="fab fa-safari"></i> Safari';
} elseif (strstr($browser, 'opera')) {
    $browser_info = '<i class="fab fa-opera"></i> Opera';
} else {
    $browser_info = '<i class="fab fa-suse"></i> Unknown Browser';
}
?>
<!--

    お願い Please

    このサイトは私が一から頑張って制作したサイトです。
    丸ごとコピーして無断転用はしないようお願いします。
    不器用ながら頑張って作ったんです。だからお願い。

    This site was created by me.
    Please do not copy all of the source code and use it for other websites.

    フロントエンドフレームワークに"UIKit"っていうものを使ってます。
    同じフレームワークを使ってる中で、ここどうやって動かしてるの？とか
    わからないときに参考程度にコードを覗くのは大丈夫です。
    拙いコードですが参考になればと思います。
    あと「こういう風に書くといいよ」とかのアドバイスもあれば是非教えてください。

    The front-end framework uses UIKit.
    Permission is granted for people using the same framework to view the source code for reference purposes.
    Please forgive me for being bad at it. (-_<)/

    ...ついでに言いますが、このサイト。
    実は隠し要素的なものがあったりします。探しても特に意味はないですけどね笑
    ヒントは、今このメッセージが見えているあなた。この時点で探すことができます。
    他にも色んなページにも隠されていますよ。

    There is a hidden element somewhere on this site. At the outset, this hidden element has no merit to look for.
    The hint is somewhere in the source code. It's hidden in various pages.

-->
<!DOCTYPE html>
<html>
<!-- ヘッダー -->
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/css/uikit.min.css"/>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit-icons.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- Fabicon -->
    <link rel="icon" href="/image/sasori_fabicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="/image/sasori_fabicon.svg">
    <link rel="icon" type="image/svg" href="/image/sasori_fabicon.svg" sizes="192x192">
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166940521-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-166940521-1');
</script>
<!-- ナビバー -->
<div class="my-class" uk-sticky="bottom: #offset">
    <nav uk-navbar class="uk-navbar-container<?= $style[2] ?> uk-box-shadow-large">
        <!-- 左側 -->
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <a class="uk-navbar-item uk-logo" href="https://eriel.net"><img src="/image/sasori_logo.svg" height="40" width="40">古代大津史</a>
            </ul>
        </div>
        <!-- 省略左側 -->
        <div class="uk-navbar-left uk-visible@l">
            <ul class="uk-navbar-nav">
                <li class="uk-parent">
                    <a href="#" class="uk-button uk-button-text">Topic</a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-4<?= $style[0] . $style[1] ?>"
                         uk-dropdown="animation: uk-animation-slide-top-small; duration: 500">
                        <div class="uk-navbar-dropdown-grid uk-child-width-1-3" uk-grid>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header"><h5 class="uk-margin-remove-bottom">学習</h5></li>
                                    <li><a href="#" class="uk-disabled">初めての人へ</a></li>
                                    <li><a href="#" class="uk-disabled">専門用語</a></li>
                                    <li><a href="#" class="uk-disabled">遺跡と古墳の違い</a></li>
                                    <li><a href="/story">古代史を学ぶことの意義</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header"><h5 class="uk-margin-remove-bottom">歴史</h5></li>
                                    <li><a href="#" class="uk-disabled">渡来人がもたらした影響</a></li>
                                    <li><a href="#" class="uk-disabled">近江大津宮の繁栄と衰退</a></li>
                                    <li><a href="#" class="uk-disabled">三井寺と延暦寺の抗争</a></li>
                                    <li><a href="#" class="uk-disabled">西大津バイパスの裏側</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header"><h5 class="uk-margin-remove-bottom">残された謎</h5></li>
                                    <li><a href="#" class="uk-disabled">梵釈寺の行方</a></li>
                                    <li><a href="#" class="uk-disabled">南滋賀廃寺と錦部寺</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="uk-parent">
                    <a href="#" class="uk-button uk-button-text">Ruins</a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-6<?= $style[0] . $style[1] ?>"
                         uk-dropdown="pos: bottom-justify; boundary: .my-class; boundary-align: true; animation: uk-animation-slide-top-small; duration: 500">
                        <div class="uk-navbar-dropdown-grid uk-child-width-1-6" uk-grid>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <?php
                                    //上部メニュー表示
                                    for ($i = 0; $i < count($district); $i++) {
                                        //ヘッダー
                                        print '<li class="uk-nav-header"><h5 class="uk-margin-remove-bottom">' . $district[$i] . '</h5></li>';
                                        for ($j = 0; $j < count($ruin[$i]); $j += 2) {
                                            //史跡
                                            if ($ruin[$i][$j + 1] == "none") {
                                                //コンテンツが作成できていないとき
                                                print '<li><a href="#" class="uk-disabled">' . $ruin[$i][$j] . '</a></li>';
                                            } else {
                                                if ($i == 4 && $j == 12) {
                                                    //特殊なデータ
                                                    print '<!--<li><a href="/ruins/' . $ruin[$i][$j + 1] . '">' . $ruin[$i][$j] . '</a></li>-->';
                                                } else {
                                                    //榿木原、福王子、大伴古墳
                                                    if (($i == 4 and $j == 4) or ($i == 4 and $j == 6) or ($i == 4 and $j == 8)) {
                                                        //完全に完成したもの
                                                        print '<li><a href="/ruins/' . $ruin[$i][$j + 1] . '"><span class="uk-label uk-label-success">未完成</span> ' . $ruin[$i][$j] . '</a></li>';
                                                    } else {
                                                        //途中作成のもの
                                                        print '<li><a href="/ruins/' . $ruin[$i][$j + 1] . '"><span class="uk-label uk-label-warning">準備中</span> ' . $ruin[$i][$j] . '</a></li>';
                                                    }
                                                }
                                            }
                                        }
                                        //区切り
                                        if ($i == 2 || $i == 4 || $i == 5 || $i == 7 || $i == 10) {
                                            //縦の区切り
                                            print '</ul></div><div><ul class="uk-nav uk-navbar-dropdown-nav">';
                                        } else {
                                            //横の区切り(一番最後は省く)
                                            if ($i < count($district) - 1) {
                                                print '<li class="uk-nav-divider"></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 省略右側 -->
        <div class="uk-navbar-right uk-visible@l">
            <ul class="uk-navbar-nav">
                <li class="uk-parent">
                    <a href="#" class="uk-button uk-button-text">Info</a>
                    <div class="uk-navbar-dropdown<?= $style[0] . $style[1] ?>"
                         uk-dropdown="animation: uk-animation-slide-top-small; duration: 500">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-nav-header"><h5 class="uk-margin-remove-bottom">情報</h5></li>
                            <li><a href="/policy">利用規約</a></li>
                            <li><a href="/privacy-policy">プライバシー</a></li>
                            <li><a href="/cookie-policy">Cookie</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="/info">新着情報</a></li>
                            <li><a href="https://github.com/obakyuu/AncientOtsu">GitHub</a></li>
                        </ul>
                    </div>
                </li>
                <li class="uk-parent">
                    <a href="/form" class="uk-button uk-button-text">Contact</a>
                </li>
                <li class="uk-parent">
                    <a href="#modal-group-1" uk-toggle uk-icon="icon: settings"></a>
                </li>
            </ul>
        </div>
        <!-- 設定 -->
        <div id="modal-group-1" uk-modal class="uk-flex-top<?= $style[0] ?>">
            <div class="uk-modal-dialog uk-margin-auto-vertical<?= $style[1] ?>">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header<?= $style[1] ?>">
                    <h2 class="uk-modal-title">設定</h2>
                </div>
                <form action="<?= (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>"
                      method="post">
                    <div class="uk-modal-body">
                        <fieldset class="uk-fieldset">
                            <legend class="uk-legend">テーマ</legend>
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><input class="uk-radio" type="radio" name="theme"
                                              value="0" <?php if ($theme == 0) {
                                        print "checked";
                                    } ?>> ホワイト</label>
                                <label><input class="uk-radio" type="radio" name="theme"
                                              value="1" <?php if ($theme == 1) {
                                        print "checked";
                                    } ?>> ブラック</label>
                            </div>
                            <legend class="uk-legend">デバイス情報</legend>
                            <?= '<p>' . $device . '（' . $browser_info . '）</p>' ?>
                        </fieldset>
                    </div>
                    <div class="uk-modal-footer uk-text-right<?= $style[1] ?>">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">取消</button>
                        <button class="uk-button uk-button-primary" type="submit">適用</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- スマホ用メニュー -->
        <div class="uk-navbar-right uk-hidden@l">
            <a href="#modal-group-1" uk-toggle uk-icon="icon: settings"></a>
            <a class="uk-navbar-toggle uk-margin-small-right" uk-navbar-toggle-icon href="#"
               uk-toggle="target: #offcanvas-push"></a>
        </div>
    </nav>
</div>
<body class="<?= $style[1] ?>">
<!-- サイドメニュー -->
<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
    <div class="uk-offcanvas-bar">
        <h3>Menu</h3>
        <ul uk-accordion="multiple: true" class="uk-nav uk-nav-default">
            <li class="uk-parent">
                <a class="uk-accordion-title" href="#">Topic</a>
                <div class="uk-accordion-content">
                    <ul class="uk-nav-sub">
                        <li class="uk-nav-header">学習</li>
                        <li><a href="#" class="uk-disabled">初めての人へ</a></li>
                        <li><a href="#" class="uk-disabled">専門用語</a></li>
                        <li><a href="#" class="uk-disabled">遺跡と古墳の違い</a></li>
                        <li><a href="/story">古代史を学ぶことの意義</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-nav-header">歴史</li>
                        <li><a href="#" class="uk-disabled">渡来人がもたらした影響</a></li>
                        <li><a href="#" class="uk-disabled">近江大津宮の繁栄と衰退</a></li>
                        <li><a href="#" class="uk-disabled">三井寺と延暦寺の抗争</a></li>
                        <li><a href="#" class="uk-disabled">西大津バイパスの裏側</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-nav-header">残された謎</li>
                        <li><a href="#" class="uk-disabled">梵釈寺の行方</a></li>
                        <li><a href="#" class="uk-disabled">南滋賀廃寺と錦部寺</a></li>
                    </ul>
                </div>
            </li>

            <li class="uk-parent">
                <a class="uk-accordion-title" href="#">Ruins</a>
                <div class="uk-accordion-content">
                    <ul class="uk-nav-sub">
                        <?php
                        //上部メニュー表示
                        for ($i = 0; $i < count($district); $i++) {
                            //ヘッダー
                            print '<li class="uk-nav-header">' . $district[$i] . '</li>';
                            for ($j = 0; $j < count($ruin[$i]); $j += 2) {
                                //史跡
                                if ($ruin[$i][$j + 1] == "none") {
                                    //コンテンツが作成できていないとき
                                    print '<li><a href="#" class="uk-disabled">' . $ruin[$i][$j] . '</a></li>';
                                } else {
                                    if ($i == 4 && $j == 12) {
                                        print '<!--<li><a href="/ruins/' . $ruin[$i][$j + 1] . '">' . $ruin[$i][$j] . '</a></li>-->';
                                    } else {
                                        //榿木原、福王子、大伴
                                        if (($i == 4 and $j == 4) or ($i == 4 and $j == 6) or ($i == 4 and $j == 8)) {
                                            //完全に完成したもの
                                            print '<li><a href="/ruins/' . $ruin[$i][$j + 1] . '"><span class="uk-label uk-label-success">新着</span> ' . $ruin[$i][$j] . '</a></li>';
                                        } else {
                                            //途中作成のもの
                                            print '<li><a href="/ruins/' . $ruin[$i][$j + 1] . '"><span class="uk-label uk-label-warning">作成中</span> ' . $ruin[$i][$j] . '</a></li>';
                                        }

                                    }
                                }
                            }
                            //横の区切り(一番最後は省く)
                            if ($i < count($district) - 1) {
                                print '<li class="uk-nav-divider"></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </li>

            <li class="uk-parent">
                <a class="uk-accordion-title" href="#">Info</a>
                <div class="uk-accordion-content">
                    <ul class="uk-nav-sub">
                        <li><a href="/policy">利用規約</a></li>
                        <li><a href="/privacy-policy">プライバシー</a></li>
                        <li><a href="/cookie-policy">Cookie</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="/info">新着情報</a></li>
                        <li><a href="https://github.com/obakyuu/AncientOtsu">GitHub</a></li>
                    </ul>
                </div>
            </li>

            <li class="uk-parent">
                <a class="uk-accordion-title" href="#">Contact</a>
                <div class="uk-accordion-content">
                    <ul class="uk-nav-sub">
                        <li><a href="/form">連絡</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>