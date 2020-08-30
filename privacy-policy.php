<?php
//タイトル
$title = "プライバシーポリシー";
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
    <h1 class="uk-text-center">プライバシーポリシー</h1>
    <div class="uk-text-right">令和2年6月15日</div>
    <div class="uk-text-right">サイト運営者</div>
    <hr class="uk-divider-icon">
    <h3>定義</h3>
    <p>
        古代大津史（以下、当サイトと記載）における個人情報の取り扱いについて定義します。
    </p>
    <h3>原則</h3>
    <p>当サイトを通じて、ユーザの個人情報を外部へ送信することは一切ございません。</p>
    <h3>取扱</h3>
    <p>
        ここで記載されている個人情報の取り扱いは、Contactによる情報のやりとりを想定しています。
        やりとりを行う内容にもよりますが、こちらから本名(そちらから匿名希望の旨を伝えていただければ配慮します。)
        性別、年齢を始めとする個人を特定する情報のほか、金銭にかかわる情報をこちらから聞き出すことはありません。
    </p>
    <hr class="uk-divider-icon">
    <h3>前歴</h3>
    <p>
        2020年5月19日　利用規約を制定<br>
        2020年6月13日　改定<br>
        2020年6月15日　改定<br>
    </p>
</div>

<!--フッター-->
<?php include $_ENV['ROOT']."include/footer.php" ?>
