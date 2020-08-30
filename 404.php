<?php
//タイトル
$title = "Not Found 404";
//Composer
require_once __DIR__.'/vendor/autoload.php';
//.env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//Header
include $_ENV['ROOT']."include/header.php";
?>

<!-- 中央コンテンツ -->
<div class="uk-height-viewport<?= $style[0] . $style[1] ?>">
    <div class="uk-container uk-position-center uk-animation-fade">
        <h1 class="uk-text-center">404</h1>
        <hr>
        <p>
            お探しのページは見つかりませんでした。ページが削除されたか、URLが変更された可能性があります。<br>
            お手数をおかけしますが、トップページからお探しください。
        </p>
    </div>
</div>

<!--フッター-->
<div class="uk-position-bottom uk-section uk-section-small uk-box-shadow-medium <?php if ($theme == 1) {
    print 'uk-section-secondary';
} else {
    print 'uk-section-muted';
} ?>">
    <div class="uk-container">
        <div class="uk-text-center">
            <?php
            //開設年+1
            if (date('Y') > 2020) {
                print "Copyright©2020-" . date('Y') . " ";
            } else {
                print "Copyright©2020 ";
            }
            ?>Eriel All Rights Reserved.
        </div>
    </div>
</div>
</body>
</html>