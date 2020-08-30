<?php
//タイトル
$title = "Cookie";
//Composer
require_once __DIR__.'/vendor/autoload.php';
//.env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//Header
include $_ENV['ROOT']."include/header.php";
?>

<!--本文-->
<div class="uk-container uk-section uk-animation-fade<?= $style[0] ?>">
    <h1 class="uk-text-center">Cookie</h1>
    <div class="uk-text-right">令和2年6月14日</div>
    <div class="uk-text-right">サイト運営者</div>
    <hr class="uk-divider-icon">
    <h3>定義</h3>
    <p>
        古代大津史（以下、当サイトと記載）では、ユーザビリティ向上とアクセス分析の2つの目的にのみCookieを使用します
    </p>
    <h3>説明</h3>
    <p>
        Cookie(クッキー)とは、Webサイトから現在閲覧している端末に保存される小さなテキストファイルです。
    </p>
    <h3>詳細</h3>
    <p>
        当サイトは2種類のCookieに分類します。
        <ol>
            <li>ユーザビリティ系</li>
            <table class="uk-table uk-table-responsive uk-table-divider uk-table-striped uk-table-hover">
                <thead>
                <tr>
                    <th class="uk-width-small">COOKIE名</th>
                    <th class="uk-width-small">保存期間</th>
                    <th class="uk-table-expand">内容</th>
                    <th class="uk-width-medium">値</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>theme</td>
                    <td>1週間</td>
                    <td>サイトのテーマ状態を保存します</td>
                    <td>0:白 / 1:黒</td>
                </tr>
                </tbody>
            </table>
            <li>アクセス分析</li>
    <p>
        当サイトはGoogleアナリティクスを導入しており、当サイトの品質向上を目的にアクセス分析、集計を行っております。情報はGoogleへ機密情報として送信されます。
        詳しくは <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=ja"
                style="word-wrap: break-word" target="_blank">https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=ja</a>
        からご覧ください。
    </p>
    <table class="uk-table uk-table-responsive uk-table-divider uk-table-striped uk-table-hover">
        <thead>
        <tr>
            <th class="uk-width-medium">COOKIE名</th>
            <th class="uk-width-small">保存期間</th>
            <th class="uk-table-expand">内容</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>_ga</td>
            <td>2年間</td>
            <td>ユーザーを区別するために使用します</td>
        </tr>
        <tr>
            <td>_gid</td>
            <td>24時間</td>
            <td>ユーザーを区別するために使用します</td>
        </tr>
        <tr>
            <td>_gat</td>
            <td>1分間</td>
            <td>
                リクエスト率を抑制するために使用します。Google アナリティクスの導入が Google タグ マネージャーによって行われた場合、
                この Cookie の名前は _dc_gtm_[property-id] になります
            </td>
        </tr>
        <tr>
            <td>AMP_TOKEN</td>
            <td>30秒~1年間</td>
            <td>
                クライアント ID を AMP クライアント ID サービスから取得するために使用できるトークンが含まれています。
                他の有効な値によって、オプトアウト、処理中のリクエスト、AMP クライアント ID サービスからのクライアント ID の
                取得エラーが示されます。
            </td>
        </tr>
        <tr>
            <td>_gac_[property-id]</td>
            <td>90日間</td>
            <td>
                ユーザーのキャンペーン関連情報が含まれます。Google アナリティクスと Google 広告のアカウントをリンクしている場合は、
                オプトアウトしない限り、Google 広告ウェブサイトのコンバージョン タグでこの Cookie の情報が読み取られます。
            </td>
        </tr>
        </tbody>
    </table>
    </ol>
    </p>
    <hr class="uk-divider-icon">
    <h3>前歴</h3>
    <p>
        2020年5月13日　利用規約を制定<br>
        2020年5月18日　改定<br>
        2020年6月13日　改定<br>
        2020年6月14日　改定<br>
        2020年7月04日　改定<br>
    </p>
</div>

<!--フッター-->
<?php include $_ENV['ROOT']."include/footer.php" ?>
