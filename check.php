<?php
//タイトル
$title = "確認";
//Composer
require_once __DIR__.'/vendor/autoload.php';
//.env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//Header
include $_ENV['ROOT']."include/header.php";

//POST
$name = htmlentities($_POST['name']);
$from = htmlentities($_POST['mail']);
$subject = htmlentities($_POST['type']);
$text = htmlentities($_POST['text']);
//文字チェック
//名前(空白、もしくは21文字以上)
if (mb_strlen($name) == 0) {
    $err1 = '<span style="color:#ff0000;">空白です</span>';
} elseif (mb_strlen($name) > 20) {
    $err1 = '<span style="color:#ff0000;">' . (mb_strlen($name) - 20) . '文字多いです</span>';
}
//メールアドレス(空白、もしくは51文字以上)
if (mb_strlen($from) == 0) {
    $err2 = '<span style="color:#ff0000;">空白です</span>';
} elseif (mb_strlen($from) > 50) {
    $err2 = '<span style="color:#ff0000;">' . (mb_strlen($from) - 50) . '文字多いです</span>';
}
//内容(空白、もしくは201文字以上)
if (mb_strlen($text) == 0) {
    $err3 = '<span style="color:#ff0000;">空白です</span>';
} elseif (mb_strlen($text) > 200) {
    $err3 = '<span style="color:#ff0000;">' . (mb_strlen($text) - 200) . '文字多いです</span>';
}
//タイトル(空白)
if (mb_strlen($subject) == 0) {
    $err4 = '<span style="color:#ff0000;">空白です</span>';
}
?>
<!-- 本文 -->
<div class="uk-container uk-margin-medium uk-animation-fade<?= $style[0] ?>">
    <h3 class="uk-heading-bullet">確認</h3>
    <form class="uk-form-stacked" action="send" method="post">
        <!-- 名前 -->
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">名前(20/<?php if (mb_strlen($name) > 20) {
                    print '<span style="color:#ff0000;">' . mb_strlen($name) . '</span>';
                } else {
                    print mb_strlen($name);
                } ?>)</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text" value="<?= $name ?>" readonly>
                <input type="hidden" name="name" value="<?= $name ?>">
                <?php if (isset($err1)) {
                    print $err1;
                } ?>
            </div>
        </div>
        <!-- メールアドレス -->
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">メールアドレス(50/<?php if (mb_strlen($from) > 50) {
                    print '<span style="color:#ff0000;">' . mb_strlen($from) . '</span>';
                } else {
                    print mb_strlen($from);
                } ?>)</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="email" value="<?= $from ?>" readonly>
                <input type="hidden" name="mail" value="<?= $from ?>">
                <?php if (isset($err2)) {
                    print $err2;
                } ?>
            </div>
        </div>
        <!-- 問い合わせ種類 -->
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-select">種類</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text" value="<?= $subject ?>" readonly>
                <input type="hidden" name="subject" value="<?= $subject ?>">
                <?php if (isset($err4)) {
                    print $err4;
                } ?>
            </div>
        </div>
        <!-- 内容 -->
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">内容(200/<?php if (mb_strlen($text) > 200) {
                    print '<span style="color:#ff0000;">' . mb_strlen($text) . '</span>';
                } else {
                    print mb_strlen($text);
                } ?>)</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" rows="20" style="resize: none;" readonly><?= $text ?></textarea>
                <input type="hidden" name="text" value="<?= $text ?>">
                <?php if (isset($err3)) {
                    print $err3;
                } ?>
            </div>
        </div>
        <?php
        if (isset($err1) == false && isset($err2) == false && isset($err3) == false && isset($err4) == false) {
            print '
                <!-- お知らせ -->
                <h3 class="uk-heading-bullet">送信前に確認</h3>
                <p>
                    <ul>
                        <li>送信ボタンを押すと送信されます。上記の内容に間違いがないことを<b>必ず確認</b>した後に、送信してください。</li>
                        <li>入力フォームに空白、もしくは指定文字数を超えた場合は送信ができません。戻るボタンを押し、問題の箇所を修正してから送信してください</li>
                    </ul>
                </p>
            ';
        } else {
            print '
                <!-- お知らせ -->
                <h3 class="uk-heading-bullet"><b>内容に不備があります</b></h3>
                <p>
                    <ul>                        
                        <li>入力フォームに空白、もしくは指定文字数を超えた場合は送信ができません。『戻る』を押し、問題の箇所を修正してから送信してください</li>
                    </ul>
                </p>
            ';
        }
        ?>

        <!-- ボタン類 -->
        <div class="uk-margin uk-text-center">
            <a class="uk-button uk-button-default"
               href="form?name=<?= $name ?>&from=<?= $from ?>&subject=<?= $subject ?>&text=<?= $text ?>">戻る</a>
            <?php
            if (isset($err1) == false && isset($err2) == false && isset($err3) == false && isset($err4) == false) {
                print '<button class="uk-button uk-button-primary" type="submit">送信</button>';
            }
            ?>
        </div>

    </form>
</div>
<!--フッター-->
<?php include $_ENV['ROOT']."include/footer.php" ?>