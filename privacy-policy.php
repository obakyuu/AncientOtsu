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
    <?php include 'privacy.html' ?>
</div>

<!--フッター-->
<?php include $_ENV['ROOT']."include/footer.php" ?>
