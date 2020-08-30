<?php
//タイトル
$title = "福王子古墳群";
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
                <img src="../image/fukuouji/cover/01.jpg" uk-cover>
            </li>
            <li>
                <img src="../image/fukuouji/cover/02.jpg" uk-cover>
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
        <h2 class="uk-margin-remove">福王子古墳群</h2>
        <h5 class="uk-margin-remove">ふくおうじこふんぐん</h5>
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
                京阪南滋賀駅から西に500m坂を上った先にある福王子神社境内に点在している古墳群である。
                大津歴史博物館のデータベースによると福王子古墳群は総数15基の円墳から構成される古墳時代後期頃(6世紀後半)の<b uk-tooltip="ぐんしゅうふん">群集墳</b>です。
                <b uk-tooltip="よこあなしきせきしつ">横穴式石室</b>が確認できるのは4基(1号墳,2号墳,6号墳,8号墳)、残りの11基は西大津バイパスによる道路造成や
                崩落、諸々の起因により確認は困難でした。発掘調査時に4基から滋賀里の百穴古墳群からも出てきたミニチュア炊飯型土器が出土。
                <br>
                福王子古墳群から北方すぐに流れる川の向かいには<b uk-tooltip="おおとものくろぬし">大友黒主</b>を祭神とする<b uk-tooltip="おおともじんじゃ">大伴神社</b>があるが、
                その境内にも古墳が存在している。<b uk-tooltip="おおともこふんぐん(ふくおうじきたこふんぐん)">大伴古墳群(福王子北古墳群)</b>である。川を隔てた向かい側にあり、
                橋が架かってあるのでそこから行くと近道である。
            <h4>参考資料</h4>
            <ul>
                <li>
                    大津市歴史博物館 - 福王子古墳群<br>
                    <a href="http://www.rekihaku.otsu.shiga.jp/db/jiten/data/073.html" target="_blank"
                       style="word-break: break-all">http://www.rekihaku.otsu.shiga.jp/db/jiten/data/073.html</a>
                </li>
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
                        src="https://www.google.com/maps/d/embed?mid=1KlaHawirbfPu4F6Gd0VYBPAfWeHBZ-iG&z=19"></iframe>
            </div>
            <h3>注意</h3>
            福王子古墳群は周囲から少々わかりづらい場所にあります。周辺に行きますと正興寺が見えてきますので、そこを目指すと福王子神社の鳥居が見えます。
            鳥居をくぐった先に古墳群はありますのでしっかり探しましょう。
            <h3>近隣の史跡</h3>
            <ul>
                <li>大伴古墳群</li>
                <li>榿木原遺跡</li>
                <li>南滋賀町廃寺跡</li>
            </ul>
        </li>
        <li class="uk-animation-fade">
            <img class="uk-margin-small-bottom" data-src="/image/fukuouji/01.png" alt="" uk-img>
            <ul class="uk-margin">
                <li>本記事は滋賀県教育委員会が発行した『滋賀県文化財調査報告書 第4冊』を元に作成しています</li>
                <li>発掘調査時の記録を元に記述しています</li>
            </ul>
            <div uk-grid>
                <div class="uk-width-small@m">
                    <ul class="uk-tab-left uk-flex-center"
                        uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                        <li><a class="uk-text-center" href="#">1号墳</a></li>
                        <li><a class="uk-text-center" href="#">2号墳</a></li>
                        <li><a class="uk-text-center" href="#">3号墳</a></li>
                        <li><a class="uk-text-center" href="#">4号墳</a></li>
                        <li><a class="uk-text-center" href="#">5号墳</a></li>
                        <li><a class="uk-text-center" href="#">6号墳</a></li>
                        <li><a class="uk-text-center" href="#">7号墳</a></li>
                        <li><a class="uk-text-center" href="#">8号墳</a></li>
                        <li><a class="uk-text-center" href="#">9号墳</a></li>
                        <li><a class="uk-text-center" href="#">10号墳</a></li>
                        <li><a class="uk-text-center" href="#">11号墳</a></li>
                        <li><a class="uk-text-center" href="#">12号墳</a></li>
                        <li><a class="uk-text-center" href="#">13号墳</a></li>
                        <li><a class="uk-text-center" href="#">14号墳</a></li>
                    </ul>
                </div>
                <div class="uk-width-expand">
                    <ul id="component-tab-left" class="uk-switcher">
                        <li>
                            <h2>1号墳</h2>
                            第1号古墳は、南南東に開口部を向けた左片袖式横穴式石室墳である。
                            <h3>位置</h3>
                            本古墳は福王子古墳群中最北端に位置するものであり、近くを流れる川の影響で墳丘及び石室の一部が崩落している。
                            <h3>墳丘</h3>
                            墳丘は、河谷による浸蝕及び激しい流土によって全く確認できませんでした。
                            <h3>石室</h3>
                            <table class="uk-table uk-table-striped uk-table-hover uk-table-divider uk-table-middle">
                                <thead>
                                <tr>
                                    <th>各称</th>
                                    <th>測定</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>石室の主軸</td>
                                    <td>北北西</td>
                                </tr>
                                <tr>
                                    <td>開口部</td>
                                    <td>南南東</td>
                                </tr>
                                <tr>
                                    <td>形式</td>
                                    <td>左片袖式横穴式石室墳</td>
                                </tr>
                                <tr>
                                    <td>石室の現全長</td>
                                    <td>4.75m</td>
                                </tr>
                                <tr>
                                    <td>玄室縦の長さ</td>
                                    <td>3.2m</td>
                                </tr>
                                <tr>
                                    <td>玄室奥壁幅</td>
                                    <td>推定1.8m</td>
                                </tr>
                                <tr>
                                    <td>羨道寄り</td>
                                    <td>1.8m</td>
                                </tr>
                                <tr>
                                    <td>羨道幅</td>
                                    <td>0.85m</td>
                                </tr>
                                </tbody>
                            </table>
                            立面については、天井石をはじめとして、側壁の多くが欠損しており奥壁で3、4段、右側壁で2、3段、左側壁で1段という残存状態であった。
                            このため石室の高さは不明であるが、現存1.1mから推定して、もとは、1.89m程の数値が想定されるであろう。石室の築造は、基底石をはじめとして、側壁、奥壁ともに
                            石材横積みとしており、左袖石のみ長さ1.2m以上の石材がたて積みとされており、奥壁部とともにこの袖石が築造過程の初期に据えられたものと考えられる。
                            他方、玄門に面を合せて羨道部に積み上げられた羨道閉塞石は、比較的良好に残存し、その幅0.85m、高さ0.8mを測ることが出来た。閉塞石群の幅は旧状を
                            伝えるものであるが、高さは当初のものとは思えず、その幅から推定して1.34mの高さは、あったと考えられる。そして閉塞石の基底石水準は、第2号古墳と同様、
                            玄室床面より0.3mも高く、玄室の床面が羨道部へ向うにしたがい順次高みをまし墳丘外へ続いたものと考えられる。
                            以上のように、石室の特徴は
                            <ol class="uk-margin-small">
                                <li>畿内通有ではないが、縦長の形式をとっている</li>
                                <li>寄窪頂持送りも、さほど厳しくない</li>
                                <li>天井石も2石を想定することが出来る</li>
                                <li>羨道閉塞石は羨門部に設けられず、玄室内に施設されており、もはや羨道部を利用する意図はなかったと考えられる</li>
                                <li>床面の水準は羨道部の方が玄室より0.3m程高くなることが指摘された</li>
                            </ol>
                            <h3>発掘当時の遺物の出土状況</h3>
                            玄室右側壁にそって中央部より刀子片が出土し、土器類は同じく右側壁に沿った奥壁よりで浮土中より細片が見受けられた。また玄室中央部やや左手羨
                            道よりで同じく細片土器と亀の角状把手とおぼしきものの出土が知られる。これら土器片は、いずれも攪乱層より出土しており、年代も6世紀初頭と6世
                            紀後葉に求められ、古墳の使用年代を決める決定資料とはなりえず、後述のとおり石室観より推測する外はない。一方棺釘と考えられるものは、そのおよ
                            その位置を知りえる16本を検出し、そのうち12本は原位置を保つ直立した2本の釘を合めて玄室左袖部寄りで出土している。そのため、この直立釘(F2,
                            F8)を底板より長側板に打ち込まれた釘とみる時、左側壁にそった二つの木棺を想定しえるのである。この場合、 2棺の羨道寄り木口に計12本の釘が用材
                            接合に用いられていることとなり、各木棺の角に各3本単位で釘が打ち込まれていることとなる。しかし木目よりみた釘の使用方法が野添7号古墳や飼
                            込3号古墳と大きく異なり、3本のうち1本は、木目が横縦、2本は横横となって他の諸古墳にみられる1本の木目が、横横、2本が横縦の原則と合致し
                            ないのである。これら12本の釘が、奥壁方面より遊離移動したものと考えた場合はともかく、原位置を大きく移動したと考えない場合は、底板から長側板
                            に1本、長側板より木口に1本、もう1本は、蓋板より長側板に打ち込んだものとみるかあるいは木口板の利用方法による結果とみる外はなかろう。今、
                            このような棺釘使用例が他にないとすれば接合方法を再考しなければならないが、いずれにしても、2本の直立釘より、2棺の並行がみられること、この
                            場合、底板より打ち込まれた釘は長側板と結合すること、さらに両者の棺幅は、いずれも0.5m未満であることが認められる。そして、玄室中央部および
                            左側壁寄りの釘類が大きく移動しなかったとすれば、棺の長さは1.5mから16mを想定するのが妥当であろう。<br>
                            さらに鉄釘としては、玄室奥壁部右端で1点の出土をみており、空間構成からみて、この奥壁部に沿った位置に、もう1棺の存在が認められよう、この
                            場合、右側壁寄りにも空間が構成されるのであるが、他の諸首墳の例や、あるいは刀子片の出土をみるように、副葬遺物安置場とみて木棺の収納はさけ
                            ていたと考えたい。<br>
                            以上によって
                            <ol class="uk-margin-small">
                                <li>左袖部より、側壁にかけて2棺並行がみうけられ、奥壁にそってさらに1棺と、計3棺が収納されたとみうけられる。</li>
                                <li>
                                    この古墳においては、第2号古墳と異なり、羨道部の使用を断っていることは、次期の無袖式単次葬墳ヘの動向として興味を引くものである。
                                    浮土中より出土した土器片よリー応の築造年代を推定するならば、
                                </li>
                                <li>
                                    首墳の築造形態より考え合せて、6世紀後葉に造営年代を求めることが穏当であろう。また実用竃の把手は、
                                    室内中央部浮上中より出土をみているため当墳のものとは確認されず、むしろ、他の遺物とともに付近より流入したものと考えることも可能である。
                                </li>
                                <li>本墳は第2号墳に後続する年代に位置し、家父長の2世代にわたるものであろう</li>
                            </ol>

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030204.JPG"
                                       data-caption="北向きに撮影">
                                        <img src="../image/fukuouji/001/small/P1030204-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030206.JPG"
                                       data-caption="東向きに撮影">
                                        <img src="../image/fukuouji/001/small/P1030206-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030207.JPG"
                                       data-caption="右手は羨道">
                                        <img src="../image/fukuouji/001/small/P1030207-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030208.JPG"
                                       data-caption="羨道向きに撮影">
                                        <img src="../image/fukuouji/001/small/P1030208-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030209.JPG"
                                       data-caption="石室の一部は川の影響で崩落">
                                        <img src="../image/fukuouji/001/small/P1030209-s.jpg" alt="05">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030210.JPG"
                                       data-caption="左片袖式">
                                        <img src="../image/fukuouji/001/small/P1030210-s.jpg" alt="06">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030211.JPG"
                                       data-caption="羨道と右側壁">
                                        <img src="../image/fukuouji/001/small/P1030211-s.jpg" alt="07">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030212.JPG"
                                       data-caption="玄室奥壁">
                                        <img src="../image/fukuouji/001/small/P1030212-s.jpg" alt="08">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030213.JPG"
                                       data-caption="玄室右側壁">
                                        <img src="../image/fukuouji/001/small/P1030213-s.jpg" alt="09">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030214.JPG"
                                       data-caption="羨道には閉塞石(へいそくせき)が残っている">
                                        <img src="../image/fukuouji/001/small/P1030214-s.jpg" alt="10">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030215.JPG"
                                       data-caption="羨道外から撮影">
                                        <img src="../image/fukuouji/001/small/P1030215-s.jpg" alt="11">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030216.JPG"
                                       data-caption="羨道の溝は今も残っている">
                                        <img src="../image/fukuouji/001/small/P1030216-s.jpg" alt="12">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/001/large/P1030352.JPG"
                                       data-caption="近くを流れる川から撮影">
                                        <img src="../image/fukuouji/001/small/P1030352-s.jpg" alt="13">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>2号墳</h2>
                            第2号古墳は南東に開口部を向けた左片袖式横穴式石室墳である。
                            <h3>位置</h3>
                            本古墳は先に述べた第1号古墳と並んで福王子古墳群中最北端に位置するものであり、第1号古墳との位置関係は、南東方向約3mに位置している。
                            また本墳の南東約5mには第3号古墳が築造されている。
                            <h3>墳丘</h3>
                            墳丘は、当地域の浸蝕が厳しいため他の諸古墳同様明確にみとめがたく、あわせて、石材抜取り及び被据のため大きく地形の変化を蒙っていた。また、
                            今回行なわれた調査の性格から墳丘調査は全く行なわれなかった。しかし、石室規模や旧地形のわずかな変化より直径15m前後の盛土が想定される。墳高
                            についても、同規模の他古墳と比較した場合、約3～4mの数値が得られるものと思われる。また、埴輪、葺石、外護列石、石室掘方、あるいは
                            排水施設等についても石室外の調査がなされなかったため詳細は不明である。
                            <h3>石室</h3>
                            <table class="uk-table uk-table-striped uk-table-hover uk-table-divider uk-table-middle">
                                <thead>
                                <tr>
                                    <th>各称</th>
                                    <th>測定</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>主軸</td>
                                    <td>北西方向</td>
                                </tr>
                                <tr>
                                    <td>開口部</td>
                                    <td>南東</td>
                                </tr>
                                <tr>
                                    <td>形式</td>
                                    <td>左片袖式横穴式石室</td>
                                </tr>
                                <tr>
                                    <td>現全長</td>
                                    <td>6.7m</td>
                                </tr>
                                <tr>
                                    <td>玄室縦の長さ</td>
                                    <td>3m</td>
                                </tr>
                                <tr>
                                    <td>横の長さ</td>
                                    <td>2.5m</td>
                                </tr>
                                <tr>
                                    <td>羨道幅</td>
                                    <td>玄室寄りで1.1m</td>
                                </tr>
                                <tr>
                                    <td>羨道中央部</td>
                                    <td>1m</td>
                                </tr>
                                <tr>
                                    <td>羨道入口部</td>
                                    <td>八の字状に開口するため1.5m</td>
                                </tr>
                                </tbody>
                            </table>
                            立面については玄室、羨道部ともに天井石及び側壁石が多数抜き去られ、現在、奥壁部で4段積み、高さ2m、左右側壁は3段ないし4段積みで最高1.7mまで遺存していた。そして
                            奥壁、側壁とも基底石から3石目、すなわち3段目に至って持送りが急となり、利用石材も0,78m4角大を主に大規模となって立面寄窪頂持送り式の特徴
                            がうかがわれる。石室の築造は、基底石の石材を原則としてたて積みとしており、左袖石にやや規模の大きい2石を配し、これと対応して右側壁にも
                            袖石を考慮するかのようにやや大きな石材を用いている。基底石の奥壁5石、左側壁は袖石2石を入れて13石、右側壁12石でもとは13石存在したと考えられる。
                            しかし、これら基底石は同一上の水準にはなく、床面そのものが羨道入口部に向って漸次高くなるという特異な様相を示している。このため、羨道部入
                            口より1.8mにして検出された羨道閉塞石は、わずかに遺存するものであるが4石が面をそろえており、旧状を伝えるものと考えられる。そして閉塞石
                            下のこの水準は玄室床面より約0.5m高所に位置している。この床面水準の傾斜は大津北部の古墳群に共通的にみうけられる特徴の一つである。
                            以上のように石室における特徴は、
                            <ol class="uk-margin-small">
                                <li>方形平面を呈する</li>
                                <li>官窪頂持送り式をとること</li>
                                <li>左片袖式をなすが、右側壁にもかっての袖が意識されていること、</li>
                                <li>石材は基底石がたて積みとされ、上に行くほど大規模な石材を用いている。</li>
                                <li>羨道閉塞石は羨門よりやや奥に積まれていた</li>
                                <li>床面が羨道へ向って0.5m程高くなっていることが指摘出来る。</li>
                            </ol>
                            <h3>発掘当時の遺物出土状況</h3>
                            玄室右側壁中央やや羨道よりに、竃、釜、ltlをセットしたミニチャ炊飯具が原位置を保って出土をみた。その出土状況は、正面を羨道入口部方向に向け
                            竃に釜を重ねており、炊国内には対が据えられていた。そして釜の上に重ねられるべき伍は後述のごとく玄室左側壁寄りから出上しており、観のみ亀から
                            切りはなされ死者のそばに置かれたものと考えられる。他の土器片はすべて攪乱されており、現位置を保つものはなかった。ただ玄門付近及び左袖の側壁
                            付近より重片や高郭が浮上中より出土したのみであった。
                            他方鉄製棺釘及び鑑については、現在、その出土位置がかなり明瞭なもの11本が知られており、そのうち羨道部浮土中の1本を除いて9本がほぼ棺の位置を
                            想定しえる資料として遺存していた。現位置ないしは木棺の崩壊状況で遺存しているこれらの釘は、まず、玄室左狽」壁袖石よりに3本の釘が認められ、
                            木目の走行より棺底より打ち込まれたもの1本、長側辺より中に向けて打ち込まれた2本の計3本からなるものと推定された。さらに、この地点より
                            右よりに約70糎にしてやや散在した姿で3本の釘と1本の鑑が検出されており、木日板の奥壁方向への崩壊を考えたとき、この鑢は棺蓋と身の接
                            合に用いられたものであり、すぐ近くの釘は長側辺より中に向けて打ち込まれたものと考えられる。そして羨道よりの2本の釘は1本が棺底より上に向け
                            て打ち込まれたものであり、他方は長側辺から中に向けて木口を接合したものとみることが出来る。このように棺位置を取るならば、奥壁よりの2本はこ
                            の棺の木日に打ち込まれた残存釘とみられ、他の4本の釘と2本の鑑は攪乱時に散逸したと想定出来るのである。現在、釘の位置より確実に想定出来る木
                            棺位置は左袖石によって生じた玄室左側の空間に1棺のみであった。しかし、棺釘は羨道部浮土中からも2本が検出されており、玄室内の棺釘が遊離した
                            場合も想定されるが、羨道閉塞石の位置がかなり羨門寄りに構築されている意図からも、あるいは羨道部にもう1棺追葬が考えられよう。また、奥壁部の
                            空間にも左側壁に沿った棺釘使用の本格とL字形をなして埋置された可能性もある。しかし、右側壁にそっては、炊飯具の安置のため、棺の収納はなされ
                            なかったものと考えられる。
                            すでに述べた如く、須恵器をはじめとする副葬晶は、炊飯具一式を除いてすべて浮土中から出土しており、その種類は壺1と有蓋高杯の蓋と身が完形で
                            出土し、郭身2、郭蓋1、重の口縁1、高杯脚1が細片となって出土している。このうち前者は6世紀中葉後半に位置し、後者は5世紀末葉に位置するもの
                            と想定されるのである。当首墳の築造年代もこの2時期に示される土器片より編年的位置付けが必要とされるのであるが、当古墳の玄室がやや縦長となり
                            片袖式に変化することと考えあわせ、前者、つまり6世紀中葉後半に築造年代を求めるのが妥当であろう。特に福王子首墳群の場合、今回調査された他の
                            古墳においても縄文式上器や弥生式土器をはじめ多くの古式須意器が出土しており、石室内の遺物より単純に年代決定出来ない状況であった。
                            以上のことより、
                            <ol class="uk-margin-small">
                                <li>玄室内右側に炊飯具がセットをなして安置され、そのうちミニチヤの甑は玄室側に沿って
                                    埋置された木棺の上か横に単独にそえられている状態で出土していること。
                                </li>
                                <li>確実にみとめられる木棺は玄室内左側壁にそった1棺のみであり、他の棺の配置は積極的な資料的裏付けがなく
                                    強いて求めれば奥壁にそった1棺と羨道部の1棺であり、複次葬の場合は3棺前後の収納が考えられる
                                </li>
                                <li>ミニチャの航出上位置より、右側壁寄りに出土した炊飯具セットが、左側壁に沿って置かれた木棺
                                    被葬者の個人的儀ネしにともなうものと推定された。
                                </li>
                                <li>石室の使用は長期に及ばず1世代内の可能性が強いこと。</li>
                                <li>大津北部の他の古墳からもうかがわれるように、石室内の中心被葬者は遺物や石棺の出
                                    土よりみて左袖部の側壁にそって置かれること。
                                </li>
                                <li>当古墳は被葬者数よりみて一般家族の埋葬を合む家族墓と呼ばれるべきものではなく、強いて呼ぶならば
                                    家父長墓と呼称されるものと考えられる。
                                </li>
                                <li>当古墳は福王子古墳群中、第1、2、3号古墳によって構成された小支群中の1基であり、
                                    第1号古墳の築造に先行するものである。
                                </li>
                                <li>おそらく、この3基の吉墳は各々前後して継起的に営なまれた3代にわたる家父長墓として小支群をなすものであろう。</li>
                            </ol>

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030226.JPG"
                                       data-caption="北向きに撮影">
                                        <img src="../image/fukuouji/002/small/P1030226-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030227.JPG"
                                       data-caption="玄室を上から撮影01">
                                        <img src="../image/fukuouji/002/small/P1030227-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030228.JPG"
                                       data-caption="玄室を上から撮影02">
                                        <img src="../image/fukuouji/002/small/P1030228-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030229.JPG"
                                       data-caption="玄室を上から撮影03">
                                        <img src="../image/fukuouji/002/small/P1030229-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030230.JPG"
                                       data-caption="玄室を上から撮影04">
                                        <img src="../image/fukuouji/002/small/P1030230-s.jpg" alt="05">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030231.JPG"
                                       data-caption="玄室を上から撮影05">
                                        <img src="../image/fukuouji/002/small/P1030231-s.jpg" alt="06">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030232.JPG"
                                       data-caption="羨道から撮影">
                                        <img src="../image/fukuouji/002/small/P1030232-s.jpg" alt="07">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030235.JPG"
                                       data-caption="左片袖式">
                                        <img src="../image/fukuouji/002/small/P1030235-s.jpg" alt="08">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030236.JPG"
                                       data-caption="袖石と左側壁">
                                        <img src="../image/fukuouji/002/small/P1030236-s.jpg" alt="09">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030237.JPG"
                                       data-caption="所々土砂が流れ込んでる">
                                        <img src="../image/fukuouji/002/small/P1030237-s.jpg" alt="10">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030239.JPG"
                                       data-caption="ドーム状になってるのがわかる">
                                        <img src="../image/fukuouji/002/small/P1030239-s.jpg" alt="11">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030240.JPG"
                                       data-caption="奥壁左上">
                                        <img src="../image/fukuouji/002/small/P1030240-s.jpg" alt="12">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030241.JPG"
                                       data-caption="奥壁左下">
                                        <img src="../image/fukuouji/002/small/P1030241-s.jpg" alt="13">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030242.JPG"
                                       data-caption="奥壁左上">
                                        <img src="../image/fukuouji/002/small/P1030242-s.jpg" alt="14">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030244.JPG"
                                       data-caption="羨道と右側壁">
                                        <img src="../image/fukuouji/002/small/P1030244-s.jpg" alt="15">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030245.JPG"
                                       data-caption="玄室から見た羨道">
                                        <img src="../image/fukuouji/002/small/P1030245-s.jpg" alt="16">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030246.JPG"
                                       data-caption="玄室床面?">
                                        <img src="../image/fukuouji/002/small/P1030246-s.jpg" alt="17">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030247.JPG"
                                       data-caption="木の根がこんなとこまで...">
                                        <img src="../image/fukuouji/002/small/P1030247-s.jpg" alt="18">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030251.JPG"
                                       data-caption="ひびが入ってる">
                                        <img src="../image/fukuouji/002/small/P1030251-s.jpg" alt="19">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/002/large/P1030252.JPG"
                                       data-caption="隙間に土と小石？が詰まってる">
                                        <img src="../image/fukuouji/002/small/P1030252-s.jpg" alt="20">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>3号墳</h2>
                            古墳の遺構は確認できなかった。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/003/large/P1030255.JPG"
                                       data-caption="3号墳があると思われる位置">
                                        <img src="../image/fukuouji/003/small/P1030255-s.jpg" alt="01">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>4号墳</h2>
                            確認が難しかった。古墳の遺構は確認できなかったが、古墳に使われていた巨石と思われるようなものは確認できた。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/004/large/P1030258.JPG"
                                       data-caption="この辺が4号墳">
                                        <img src="../image/fukuouji/004/small/P1030258-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/004/large/P1030259.JPG"
                                       data-caption="遺構が全く見えない">
                                        <img src="../image/fukuouji/004/small/P1030259-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/004/large/P1030260.JPG"
                                       data-caption="右奥は福王子神社の鳥居">
                                        <img src="../image/fukuouji/004/small/P1030260-s.jpg" alt="03">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>5号墳</h2>
                            遺構も石も確認できなかった。唯一全くわからなかった。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/005/large/P1030263.JPG"
                                       data-caption="北向きに撮影">
                                        <img src="../image/fukuouji/005/small/P1030263-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/005/large/P1030264.JPG"
                                       data-caption="東向きに撮影">
                                        <img src="../image/fukuouji/005/small/P1030264-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/005/large/P1030265.JPG"
                                       data-caption="墳丘...？">
                                        <img src="../image/fukuouji/005/small/P1030265-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/005/large/P1030266.JPG"
                                       data-caption="本当にこれが古墳？">
                                        <img src="../image/fukuouji/005/small/P1030266-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/005/large/P1030267.JPG"
                                       data-caption="西から撮影。やっぱりわからん">
                                        <img src="../image/fukuouji/005/small/P1030267-s.jpg" alt="05">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>6号墳</h2>
                            福王子神社社殿の北側に位置し、次に述べる第8号古墳同様、天井石が1石露出しており、東側が僅かに開口していた。墳丘はやや盛土が認められる程度で
                            あったが内部には土砂が流入し、天井石より1.7mのあたりまで達していた。羨道部は全て土砂に埋没していた。
                            <h3>石室の状況</h3>
                            南東に開日部を向けた片袖式横穴式石室古墳である。玄室の幅は奥壁部で2.5m、前方部で2.3mである左片袖で左側壁部の長さ3.4m、袖部は1.2mを測る
                            天井は2石と思われるが、1石が失なわれているため、見上の長さは不明、幅は1.1mである。左右両側壁とともに1.5mあたりから持送りが顕著となり、
                            右側壁の出は約0.7m、左側壁は約0.6mである。奥壁の持送りは、1mあたりからはじまり、そのせり出し幅は約0.7mである。前述の如く天井の1石が
                            ないため、詳細は不明であるが、天井の見上の長さ2.3mとして、前壁の持送りは0.4mほどとなる。壁の積み方は最上段に大石を用いているはかは、
                            大小さまざまである。隅の最上部の石は、両壁にまたがるように積まれている。袖石はあまり高くない1石に、比較的小ぶりの石を付加している。
                            羨道部は幅1.1m、長さは3m、高さは上部が崩壊しているので判然としないが1.5m前後と推測される。羨道両端の高低差は0.4mあり、先端部1m
                            ほどの上昇率が大きくなっている。またこの辺から八の字形に外開きとなり先端部で幅1.5mとなる。
                            <h3>発掘当時の遺物の出土状況</h3>
                            盗掘をうけているため、床面に遺存している遺物は棺材の釘類が大部分で土器は、袖の隅に須恵器杯身が1個完形で発見されたほか、右側壁下中央付近
                            で、竃形土器の小片を含む土師片数点が、奥部中央で土師の釜形土器破片1個が発見された。他の土器類は全て流入土中に混在していたもので、縄文式土
                            器小片1、緑紬陶器片1等がまじっており、いずれも当墳の遺物と判定することは困難である。釘類の遺存は多く、人骨が入口近くで2片発見された。棺
                            台に使用したと思われる石も遺存しているが、盗掘の際に荒らされているようである。しかし、これらの釘類と人骨の位置からして、奥壁に沿って1棺、
                            左側壁に沿い1棺、これと平行して中央部左側に1棺さらに、玄室に一部頭を入れ羨道部にかけて1棺が追葬されたとも考えられる。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030270.JPG"
                                       data-caption="古墳全景">
                                        <img src="../image/fukuouji/006/small/P1030270-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030271.JPG"
                                       data-caption="玄室正面">
                                        <img src="../image/fukuouji/006/small/P1030271-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030272.JPG"
                                       data-caption="上から01">
                                        <img src="../image/fukuouji/006/small/P1030272-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030274.JPG"
                                       data-caption="玄室を上から">
                                        <img src="../image/fukuouji/006/small/P1030274-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030275.JPG"
                                       data-caption="羨道を左上から撮影">
                                        <img src="../image/fukuouji/006/small/P1030275-s.jpg" alt="05">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030276.JPG"
                                       data-caption="羨道は傾斜になっている">
                                        <img src="../image/fukuouji/006/small/P1030276-s.jpg" alt="06">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030278.JPG"
                                       data-caption="羨道から見ると迫力がある">
                                        <img src="../image/fukuouji/006/small/P1030278-s.jpg" alt="07">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030279.JPG"
                                       data-caption="乗っかっている天井石">
                                        <img src="../image/fukuouji/006/small/P1030279-s.jpg" alt="08">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030280.JPG"
                                       data-caption="隙間から玄室が見える">
                                        <img src="../image/fukuouji/006/small/P1030280-s.jpg" alt="09">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030281.JPG"
                                       data-caption="羨道門">
                                        <img src="../image/fukuouji/006/small/P1030281-s.jpg" alt="10">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030284.JPG"
                                       data-caption="玄室には陶器製?の湯呑とお稲荷さんが置かれている">
                                        <img src="../image/fukuouji/006/small/P1030284-s.jpg" alt="11">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030286.JPG"
                                       data-caption="天井が高い。">
                                        <img src="../image/fukuouji/006/small/P1030286-s.jpg" alt="12">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030288.JPG"
                                       data-caption="玄室奥壁の右上">
                                        <img src="../image/fukuouji/006/small/P1030288-s.jpg" alt="13">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030289.JPG"
                                       data-caption="右側壁">
                                        <img src="../image/fukuouji/006/small/P1030289-s.jpg" alt="14">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030290.JPG"
                                       data-caption="右側壁の右上">
                                        <img src="../image/fukuouji/006/small/P1030290-s.jpg" alt="15">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030291.JPG"
                                       data-caption="羨道">
                                        <img src="../image/fukuouji/006/small/P1030291-s.jpg" alt="16">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030292.JPG"
                                       data-caption="左片袖式">
                                        <img src="../image/fukuouji/006/small/P1030292-s.jpg" alt="17">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030293.JPG"
                                       data-caption="玄室四隅にはテーブルの脚？が置かれている。なぜ">
                                        <img src="../image/fukuouji/006/small/P1030293-s.jpg" alt="18">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030294.JPG"
                                       data-caption="袖石の上">
                                        <img src="../image/fukuouji/006/small/P1030294-s.jpg" alt="19">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030295.JPG"
                                       data-caption="隙間から木の根が飛び出てる">
                                        <img src="../image/fukuouji/006/small/P1030295-s.jpg" alt="20">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030296.JPG"
                                       data-caption="大小さまざまな石が複雑に組まれてる">
                                        <img src="../image/fukuouji/006/small/P1030296-s.jpg" alt="21">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030297.JPG"
                                       data-caption="天井を見上げる。">
                                        <img src="../image/fukuouji/006/small/P1030297-s.jpg" alt="22">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030298.JPG"
                                       data-caption="落ちてきそう...？">
                                        <img src="../image/fukuouji/006/small/P1030298-s.jpg" alt="23">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030299.JPG"
                                       data-caption="玄室奥壁左下">
                                        <img src="../image/fukuouji/006/small/P1030299-s.jpg" alt="24">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030300.JPG"
                                       data-caption="隙間からシダ植物が生えている">
                                        <img src="../image/fukuouji/006/small/P1030300-s.jpg" alt="25">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030301.JPG"
                                       data-caption="隙間から光が漏れてる">
                                        <img src="../image/fukuouji/006/small/P1030301-s.jpg" alt="26">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030302.JPG"
                                       data-caption="天井石の下は苔が生えていない">
                                        <img src="../image/fukuouji/006/small/P1030302-s.jpg" alt="27">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030303.JPG"
                                       data-caption="壁">
                                        <img src="../image/fukuouji/006/small/P1030303-s.jpg" alt="28">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/006/large/P1030304.JPG"
                                       data-caption="羨道。これさっきも見たわ">
                                        <img src="../image/fukuouji/006/small/P1030304-s.jpg" alt="29">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>7号墳</h2>
                            地形の僅かな窪みが確認できたが、これが7号墳である確信が持てなかった。
                            推測だが、墳丘、天井石はすでに喪失、壁は土砂で崩壊した結果。窪みになった可能性がある。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/007/large/P1030307.JPG"
                                       data-caption="この辺が7号墳">
                                        <img src="../image/fukuouji/007/small/P1030307-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/007/large/P1030312.JPG"
                                       data-caption="すごくわかりづらいが左側は窪んでいる">
                                        <img src="../image/fukuouji/007/small/P1030312-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/007/large/P1030313.JPG"
                                       data-caption="7号墳は地形の窪みが目印">
                                        <img src="../image/fukuouji/007/small/P1030313-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/007/large/P1030314.JPG"
                                       data-caption="わかりづらくて申し訳ない">
                                        <img src="../image/fukuouji/007/small/P1030314-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/007/large/P1030316.JPG"
                                       data-caption="わからん。">
                                        <img src="../image/fukuouji/007/small/P1030316-s.jpg" alt="05">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/007/large/P1030319.JPG"
                                       data-caption="写真の中でこれがわかりやすい。右側。">
                                        <img src="../image/fukuouji/007/small/P1030319-s.jpg" alt="06">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>8号墳</h2>
                            福王子社殿の西南にあり、天井石が露出し、東側が開口していた。早くより封土を流出してしまっており、
                            調査時には墳丘として認められるような顕著な盛土はない。石室内の高さ1.6mばかりの空間が
                            あり、それ以下は流入の上砂に埋められていた。開口部は羨道ではなく、羨道部の天井石と玄室天井石
                            との間の石が失われてできたものであった。羨道部はすっかり土砂に埋まっていた。
                            <h3>石室の状況</h3>
                            南東に開口部を向けた両袖式石室である。玄室の幅は奥壁部で2.5m、前方部で2.4mあり、奥行は左右両側壁部ともに2.9mで、右0.3m、左0.8
                            mの両袖をもっている。高さは2.4m、天井見上幅0.9m。奥行1,9m、側壁は床面より1m、乃至1.5mの高さより持送りが顕著になり、両壁ともに最上段
                            は下底に比し、0.8mのせり出しとなっている。奥壁も1mの高さから持送りがはじまり、約0,6mのせり出しとなっている。玄室に面した羨道部の天井石は、
                            玄室面が斜になる石が用いられており、持送りを有利にしている。その上の石は失われており、この部分が開口していた。推定約0.4mのせり出しとなる。
                            石の積み方は、最下段を中ぶりの石でととのえているが、その上の段は大小不揃いとなり、持送りが始まる部分から比較的大ぶりの石を用いている。
                            右袖は小さく、柱石も用いられていない。左袖は高さ1.4mであるが、玄室につづく天井石1石を残して他の天井石は全て崩落しており、
                            側壁もほとんど崩れていた。羨道は入日が高く玄室に向って傾斜している。両端の高低差はほぼ0.5mである。羨道端はやや外開きになっている。
                            <h3>発掘当時の遺物の出土状況</h3>

                            発見された遺物の数量は非常に少なく、しかもその大部分は流入土中で発見されている。弥生式上器片3、須恵器片9、土師器片10余、奈良時代土器
                            片1等で、これらが全て混在しており、この吉墳に副葬された土器と推定し得る出土状況を示すものは、土師器の小片1個のみである。玄室底から出土して、
                            本来この古墳のものと確認できる副葬品はこの上師器小片と鉄製品4点である。なお人骨が数片散在しており、そのうち右袖に近く側壁に接して残存した
                            扁平な骨片があり、その傍に2個の四肢骨と思われる骨片が検出されたのが最もよくまとまっている。鉄製品は刀子1のほかは、全て釘である。
                            人骨及び釘の出土状況も本来の位置を示しているかどうか疑わしく棺の数や位置も推定するには至らなかった。流入土中に混在していた土器類のうち
                            弥生式土器と奈良時代のものを除き、須恵器と土師器の中には本来この古墳の副葬品であったものが、攪乱されて残存したものも多いと思われるが、
                            いずれが是で、いずれが外部からの流入であるかを識別することは困難であるため、この首墳に関する資料として用いることはひかえ、遺物の実際を報告するに
                            とどめる。ただ、この中に亀形土器の破片が存在したことは注目すべきことであろう。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030320.JPG"
                                       data-caption="全景">
                                        <img src="../image/fukuouji/008/small/P1030320-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030323.JPG"
                                       data-caption="羨道">
                                        <img src="../image/fukuouji/008/small/P1030323-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030325.JPG"
                                       data-caption="正面">
                                        <img src="../image/fukuouji/008/small/P1030325-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030326.JPG"
                                       data-caption="玄室奥に光が漏れている">
                                        <img src="../image/fukuouji/008/small/P1030326-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030327.JPG"
                                       data-caption="玄室奥壁">
                                        <img src="../image/fukuouji/008/small/P1030327-s.jpg" alt="05">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030328.JPG"
                                       data-caption="右側壁">
                                        <img src="../image/fukuouji/008/small/P1030328-s.jpg" alt="06">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030330.JPG"
                                       data-caption="左側壁">
                                        <img src="../image/fukuouji/008/small/P1030330-s.jpg" alt="07">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030331.JPG"
                                       data-caption="南向きに撮影">
                                        <img src="../image/fukuouji/008/small/P1030331-s.jpg" alt="08">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030334.JPG"
                                       data-caption="後ろから">
                                        <img src="../image/fukuouji/008/small/P1030334-s.jpg" alt="09">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030336.JPG"
                                       data-caption="下が本来の羨道。上は羨道ではない">
                                        <img src="../image/fukuouji/008/small/P1030336-s.jpg" alt="10">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/008/large/P1030342.JPG"
                                       data-caption="遠くから見た8号墳">
                                        <img src="../image/fukuouji/008/small/P1030342-s.jpg" alt="11">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>9号墳</h2>
                            確認が難しかった。僅かに墳丘？っぽいのが確認できる程度。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/009/large/P1030337.JPG"
                                       data-caption="墳丘らしきもの">
                                        <img src="../image/fukuouji/009/small/P1030337-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/009/large/P1030339.JPG"
                                       data-caption="たぶんこのへん">
                                        <img src="../image/fukuouji/009/small/P1030339-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/009/large/P1030340.JPG"
                                       data-caption="わかりづらい">
                                        <img src="../image/fukuouji/009/small/P1030340-s.jpg" alt="03">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>10号墳</h2>
                            古墳に使われていたと思われる巨石のみが残っている。遺構自体は不明。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/010/large/P1030344.JPG"
                                       data-caption="北向きに撮影">
                                        <img src="../image/fukuouji/010/small/P1030344-s.jpg" alt="01">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/010/large/P1030345.JPG"
                                       data-caption="噴石と思われる">
                                        <img src="../image/fukuouji/010/small/P1030345-s.jpg" alt="02">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/010/large/P1030346.JPG"
                                       data-caption="遺構自体はわかりづらい">
                                        <img src="../image/fukuouji/010/small/P1030346-s.jpg" alt="03">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/010/large/P1030347.JPG"
                                       data-caption="石が大きい">
                                        <img src="../image/fukuouji/010/small/P1030347-s.jpg" alt="04">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/010/large/P1030348.JPG"
                                       data-caption="...どこの石？">
                                        <img src="../image/fukuouji/010/small/P1030348-s.jpg" alt="05">
                                    </a>
                                </div>
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/010/large/P1030349.JPG"
                                       data-caption="加工している？">
                                        <img src="../image/fukuouji/010/small/P1030349-s.jpg" alt="06">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>11号墳</h2>
                            11号は駐車場となっており確認ができなかった。
                        </li>
                        <li>
                            <h2>12号墳</h2>
                            12号は駐車場となっており確認ができなかった。
                        </li>
                        <li>
                            <h2>13号墳</h2>
                            13号は確認できなかったが、代わりに祠が配置されていた。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/013-014/large/P1030369.JPG"
                                       data-caption="祠">
                                        <img src="../image/fukuouji/013-014/small/P1030369-s.jpg" alt="01">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h2>14号墳</h2>
                            14号は確認できなかったが、代わりに祠が配置されていた。

                            <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" uk-grid
                                 uk-lightbox="animation: scale">
                                <div>
                                    <a class="uk-inline" href="../image/fukuouji/013-014/large/P1030369.JPG"
                                       data-caption="祠">
                                        <img src="../image/fukuouji/013-014/small/P1030369-s.jpg" alt="01">
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