<?php
//タイトル
$title = "崇福寺跡";
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

    <!--カバー-->
    <div class="uk-cover-container uk-box-shadow-medium">
        <canvas width="800" height="400"></canvas>
        <img src="" alt="" uk-cover>
    </div>
    <div class="uk-margin-small-top">
        <h2 class="uk-margin-remove">崇福寺跡</h2>
        <h5 class="uk-margin-remove">すうふくじあと</h5>
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
                準備中
            <h4>参考資料</h4>
            <ul>
                <li>
                    準備中
                </li>
            </ul>
            </p>
        </li>
        <li class="uk-animation-fade">
            <div class="uk-child-width-expand">
                <iframe uk-height-viewport="offset: true" src="https://www.google.com/maps/d/embed?mid=1zhZorhr6DddbnYq7oNpV78vr4nYWjRno&z=17"></iframe>
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