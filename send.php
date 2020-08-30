<?php
//タイトル
$title = "送信";
//Composer
require_once __DIR__.'/vendor/autoload.php';
//.env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//Header
include $_ENV['ROOT']."include/header.php";

//いきなりこのページへ飛んできた際の処理(1つでも情報が欠落すると、返信する際に困るので絶対揃う必要がある)
if(empty($_POST['name']) || empty($_POST['mail']) || empty($_POST['subject']) || empty($_POST['text'])){
    header('Location: https://eriel.net/form');
    exit();
}

//PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//変数
$name = $_POST['name'];
$from = $_POST['mail'];
$subject = $_POST['subject'];
$text = $_POST['text'];

/* オブジェクト生成 */
$mail = new PHPMailer(true);
try {
    /* サーバー設定 */
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $_ENV['MAIL_HOST'];
    $mail->Username = $_ENV['MAIL_ADDRESS'];
    $mail->Password = $_ENV['MAIL_PASS'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = "587";
    /* 送受信者設定 */
    $mail->setFrom("send@eriel.net", $name);
    $mail->addAddress($_ENV['MAIL_ADDRESS']);
    $mail->addReplyTo($_ENV['MAIL_ADDRESS'], $name);
    /* コンテンツ設定 */
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "base64";
    $mail->Subject = $subject;
    $mail->isHTML(false);
    $mail->Body  = $text."Mail:".$from;
    /* メール送信試行 */
    $mail->send();
    /* 成功 */
    $msg = array("送信しました！","返信が返ってくるまでには長く時間がかかる場合があります。気長にお待ちください。<br>迷惑メール設定(@eriel.net)も忘れずにお願いします。");
} catch (Exception $e) {
    /* 例外処理 */
    $msg = array(
        "送信に失敗しました...",
        $mail->ErrorInfo."<br>何度も失敗する場合はお手数ですが、しばらく時間を置いてから送信するようお願いいたします。");
}
?>

<!-- 本文 -->
<div uk-height-viewport="offset-bottom: true" class="<?= $style[0] . $style[1] ?>">
    <div class="uk-container uk-position-center uk-animation-fade">
        <h1 class="uk-text-center"><?= $msg[0] ?></h1>
        <hr>
        <p class="uk-text-center">
            <?= $msg[1] ?><br>
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