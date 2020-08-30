<?php
//タイトル
$title = "問い合わせ";
//Composer
require_once __DIR__.'/vendor/autoload.php';
//.env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//Header
include $_ENV['ROOT']."include/header.php";

//GET判定
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = "";
}
if (isset($_GET['from'])) {
    $from = $_GET['from'];
} else {
    $from = "";
}
if (isset($_GET['subject'])) {
    if ($_GET['subject'] == "質問") {
        $num = 1;
    } elseif ($_GET['subject'] == "指摘") {
        $num = 2;
    } else {
        $num = 3;
    }
} else {
    $num = 0;   //0と入力することに意味はない。
}
if (isset($_GET['text'])) {
    $text = $_GET['text'];
} else {
    $text = "";
}
?>
<!-- 本文 -->
<div class="uk-container uk-padding uk-animation-fade<?= $style[0] ?>">
    <h3 class="uk-heading-bullet">問い合わせフォーム</h3>
    <form class="uk-form-stacked" action="check" method="post">
        <!-- 名前 -->
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">名前(20文字まで)</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="name" id="form-stacked-text" type="text" placeholder="田中 太郎"
                       value="<?= $name ?>">
            </div>
        </div>
        <!-- メールアドレス -->
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">メールアドレス(50文字まで)</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="mail" id="form-stacked-text" type="email"
                       placeholder="info@example.com" value="<?= $from ?>">
            </div>
        </div>
        <!-- 問い合わせ種類 -->
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-select">種類</label>
            <div class="uk-form-controls">
                <select class="uk-select" name="type" id="form-stacked-select">
                    <option<?php if ($num == 1) {
                        print " selected";
                    } ?>>質問
                    </option>
                    <option<?php if ($num == 2) {
                        print " selected";
                    } ?>>指摘
                    </option>
                    <option<?php if ($num == 3) {
                        print " selected";
                    } ?>>その他
                    </option>
                </select>
            </div>
        </div>
        <!-- 内容 -->
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">内容(200文字まで)</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" name="text" rows="20" style="resize: none;"
                          placeholder="ここに内容を記入してください。"><?= $text ?></textarea>
            </div>
        </div>
        <!-- ボタン類 -->
        <div class="uk-margin uk-text-center">
            <input class="uk-button uk-button-primary" type="submit" value="確認">
        </div>
    </form>
</div>
<!--フッター-->
<?php include $_ENV['ROOT']."include/footer.php" ?>