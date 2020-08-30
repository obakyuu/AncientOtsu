<?php
//タイトル
$title = "バグレポート01";
//Composer
require_once __DIR__.'/vendor/autoload.php';
//.env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//Header
include $_ENV['ROOT']."include/header.php";
?>

<!-- カバー画像 -->
<div class="uk-cover-container uk-height-medium uk-animation-fade">
    <img src="/image/top/01.jpg" alt="" uk-cover>
</div>
<!-- 本文 -->
<div class="uk-container uk-section uk-animation-fade<?= $style[0] ?>">
    <h1 class="uk-text-center">ページが正常に読み込まれない問題について</h1>
    <hr class="uk-divider-icon">
    <h3 class="uk-heading-bullet">はじめに</h3>
    <p>
        6月の半ば頃、当サイトをAndroid端末で閲覧した際に、『一部正常に読み込めないページがある』ことを発見しました。
    </p>
    <h3 class="uk-heading-bullet">現状</h3>
    <p>
        問題の発覚から既に半月近くが経過しておりますが、未だ解決の兆しが見えていません。私自身経験は浅いですが、
        これまでにいくつかWebサイトの開発は行ってきましたがこの現象に遭遇したのは初めてです。時間のある時に調査を行っておりますが、
        めぼしい情報がない以上、手も足も出ない状況には変わりありません。
    </p>
    <h3 class="uk-heading-bullet">特定</h3>
    <p>
        問題のページは全てというわけでもなく、特定のページのみに起こっている問題であることが現在把握しております。以下が問題のページです
    </p>
    <ul>
        <li>福王子古墳(2号墳)</li>
        <div class="uk-margin-small" uk-grid>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/fuku02-chrome.png" alt=""
                                                                           uk-img>GoogleChrome
            </div>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/fuku02-firefox.png"
                                                                           alt="" uk-img>Firefox
            </div>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/fuku02-opera.png" alt=""
                                                                           uk-img>Opera
            </div>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/fuku02-yahoo.png" alt=""
                                                                           uk-img>YahooJapan!
            </div>
        </div>
        <li>福王子古墳(6号墳)</li>
        <div class="uk-margin-small" uk-grid>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/fuku06-chrome.png" alt=""
                                                                           uk-img>GoogleChrome
            </div>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/fuku06-firefox.png"
                                                                           alt="" uk-img>Firefox
            </div>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/fuku06-opera.png" alt=""
                                                                           uk-img>Opera
            </div>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/fuku06-yahoo.png" alt=""
                                                                           uk-img>YahooJapan!
            </div>
        </div>
        <li>榿木原遺跡(説明版最後)</li>
        <div class="uk-margin-small" uk-grid>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/han-chrome.png" alt=""
                                                                           uk-img>GoogleChrome
            </div>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/han-firefox.png" alt=""
                                                                           uk-img>Firefox
            </div>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/han-opera.png" alt=""
                                                                           uk-img>Opera
            </div>
            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-center"><img class="uk-box-shadow-small"
                                                                           data-src="image/bug/han-yahoo.png" alt=""
                                                                           uk-img>YahooJapan!
            </div>
        </div>
        ※確認されているページはこれですべてではありませんが、便宜上上記のみ発表しております。
    </ul>
    <h3 class="uk-heading-bullet">原因調査</h3>
    <p>
        ここから少々難しい話です。長らく調査を行った結果。以下の項目を確認しましたので報告します。
    </p>
    <ul>
        <li>Windows版GoogleChromeでのアクセス結果、問題なく閲覧ができました。</li>
        <li>Windows版Firefoxでのアクセス結果、問題なく閲覧ができました。</li>
        <li>Windows版MicrosoftEdgeでのアクセス結果、問題なく閲覧ができました。</li>
        <li>Windows版InternetExplorerでのアクセス結果、問題なく閲覧できました。</li>
        <li><span style="color:#ff0000;">Android版GoogleChromeでのアクセス結果、正常に読み込めない問題を確認しました。</span></li>
        <li>Android版Firefoxでのアクセス結果、問題なく閲覧できました。</li>
        <li><span style="color:#ff0000;">Android版Operaでのアクセス結果、正常に読み込めない問題を確認しました。</span></li>
        <li><span style="color:#ff0000;">Android版YahooJapanでのアクセス結果、正常に読み込めない問題を確認しました。</span></li>
        <li>iPhone版Safariでのアクセス結果、問題なく閲覧できました。</li>
        <li>macOS版Safariでのアクセス結果、問題なく閲覧できました。</li>
    </ul>
    <p>
        上記の環境すべてで確認を行ったところ、Android版の複数のブラウザアプリでは正常に読み込めないことが判明しました。
        この3つのブラウザには共通点があり、どちらも<span style="color:#ff0000;">Blinkのレンダリングエンジンを使用している</span>ものでした。
        そのため、「Blinkのレンダリングエンジンに問題があるのでは？」と仮説を立てましたが、レンダリングエンジンが原因による
        不具合のケースはネットで調べたところ見られなかったので、違う可能性も否定できません。
        (それにBlinkエンジンはこれ以外にもwindows版のChrome、Edgeにも使われています。)
        念の為、違う方向性でも調査した結果が以下の通りです。
    </p>
    <ul>
        <li>通信制限の可能性</li>
        Wi-Fi接続下でも同様の現象に遭遇しました
        <li>キャッシュの影響</li>
        すべてのキャッシュを削除した状態でも同様の症状が見られました
        <li>通信の途切れ</li>
        福王子古墳のページでは、文章が途中から見えなくなりますが、字がないというわけではなく、あくまで見えていないだけの状態でした。
        何もないところにロングタップをすると、何もないところに選択が適用されることから、単純に見えないだけだそうです。
        HTML上のソースコードを確認した限りは問題なく見えます。<br>
        榿木原遺跡ページでは、写真が途中から見えなくなっていました。画像全体が見えなくなっているわけではなく、
        画像の途中から途切れる症状でした。ロングタップをしてみたところ、画像の輪郭は見られたことから、
        存在はしているものの見えていないだけである。ということがわかりました。
        <li>1ページの描画量に限度がある</li>
        見えない部分は「全く存在していないわけではなく、見えていないだけである。」となれば、描画できる量に限界があるのかもしれない。
        <li>CSSフレームワークの可能性</li>
        理論上はあり得るが、検証方法が確立できていない
        <li>速度の問題？</li>
        一概にないとは言えないが、速度と因果関係はないように思える
        <li>レンタルサーバーの問題</li>
        PCとAndroid版Firefoxでは正常に閲覧ができたので、可能性は低い
    </ul>
    <h3 class="uk-heading-bullet">結論</h3>
    <p>以上の調査結果を踏まえ、以下の2つが原因に挙げられた。</p>
    <ul>
        <li>モバイル版Blinkエンジンに何らかの不具合がある？</li>
        <li>描画できる量に限界がある？</li>
    </ul>
    <h3 class="uk-heading-bullet">対処法</h3>
    <p>
        一応、根本的な問題を解決できておりませんがAndroid端末で当サイトを正常に読み込む場合、
        Firefoxブラウザを使用することで回避することが可能であることを確認しております。
    </p>
    <h3 class="uk-heading-bullet">最後</h3>
    <p>
        解決方法はわかりましたが、このサイトのためにFirefoxをインストールをするのは正直面倒です。私も出来そうならどのブラウザからも問題なく閲覧できるようにしたいです。
        将来的にはAndroid版のブラウザでも正常に閲覧ができるように解決するつもりですので、気長に待っていただければ幸いです。<br>
        当サイトのソースコードはGitHub上に公開されています。公開理由は主にコードレビューや、サイトの透明性を保つことが目的ですが、ソース内容を見て
        何か原因が判明した際は是非、GitHubのプルリクエスト、もしくはContactからご連絡を頂ければ幸いです。<br>
        GitHub：<a href="https://github.com/obakyuu/AncientOtsu" target="_blank" style="word-break: break-all">https://github.com/obakyuu/AncientOtsu</a>
    </p>
</div>

<!--フッター-->
<?php include $_ENV['ROOT']."include/footer.php" ?>
