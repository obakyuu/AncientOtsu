<?php
//タイトル
$title = "開発計画";
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
    <h1 class="uk-text-center">開発計画</h1>
    <div class="uk-text-right">令和2年8月15日</div>
    <hr class="uk-divider-icon">
    <h3 class="uk-heading-bullet">はじめに</h3>
    <p>
        当サイトを開設してからおよそ4か月近くが経過しました。開設当時は今ほど多くの機能はなく、コンテンツも全くなく非常に簡素なものでした。
        開設してからは、開設前と変わらず開発に打ち込み、ユーザビリティの向上をはじめ、セキュリティ面の見直し、高いレスポンス性、コンテンツの拡充を意識して
        開発を行ってまいりました。
    </p>
    <h3 class="uk-heading-bullet">言い訳</h3>
    <p>
        4カ月近く掛かってもなお、未だ史跡掲載数が3つだけなのは申し訳ありません。後に口述はしますが、当サイトは私含め関係者一同の
        私生活、私情に開発速度は強く依存します。私の場合、就職活動、卒論、自動車免許、学校の課題、資格勉強、そして流行り病。<br>
        今年は本当に忙しいです。何らかの事象が常に並列に動いており、とても集中できる状態ではありません。
        夏が明けた頃に活動ができればいいなと思いながら、今できることを確実に一歩ずつ進めています。
        皆様の期待に応えられますよう頑張ります。
    </p>
    <p>
        これからの当サイトの開発計画について暫定的ではありますが公開します。<br>
        来年(2021年)の春季頃までには『古代大津の歴史ポータルサイト』としての完成を目指し開発を行います。
        完成までには、非常に長く時間はかかりますがご期待ください。
    </p>
    <h3 class="uk-heading-bullet">予定</h3>
    <table class="uk-table uk-table-responsive uk-table-divider uk-table-striped uk-table-hover">
        <thead>
        <tr>
            <th class="uk-width-medium">題目</th>
            <th class="uk-width-small">予定日</th>
            <th class="uk-table-expand">内容</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>トップページの変更</td>
            <td>10月頃に実装</td>
            <td>
                ナビバーの設定画面から閲覧デバイスを取得する技術は既に獲得しており、その技術を活用して、
                PC端末から閲覧するユーザはトップページに動画を表示。モバイル端末から閲覧するユーザは動画に
                変わる画像のスライドショーを表示するように変更予定。<br>
                本当はモバイル端末内のWi-Fiを受信しているかの判定で動画か画像かの表示を切り替えるように
                したかったが、技術的に不可能だった。
            </td>
        </tr>
        <tr>
            <td>コンテンツ（文字）の追加</td>
            <td>9月～12月頃</td>
            <td>
                写真は準備できない可能性がありますが、この頃にはサイト全体のコンテンツ（文章のみ）を
                実装したいと考えています。
            </td>
        </tr>
        <tr>
            <td>現地取材</td>
            <td>9月頃～12月頃</td>
            <td>
                関係者の都合も合わせ現地取材(写真撮影など)を9月～12月の間に行う予定です。
            </td>
        </tr>
        <tr>
            <td>ServiceWorker</td>
            <td>10月までに実装したい</td>
            <td>
                <ul>
                    <li>プッシュ通知（コンテンツ追加時にお知らせ、サイト完成時にこの機能は廃止）</li>
                    <li>オフラインの閲覧(キャッシュ)</li>
                </ul>
                開発難易度が高い為、中止になる可能性が高いです。
            </td>
        </tr>
        </tbody>
    </table>
    <h3 class="uk-heading-bullet">検討</h3>
    <table class="uk-table uk-table-responsive uk-table-divider uk-table-striped uk-table-hover">
        <thead>
            <tr>
                <th class="uk-width-medium">題目</th>
                <th class="uk-width-small">予定日</th>
                <th class="uk-table-expand">内容</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>史跡ページレイアウト変更検討</td>
                <td>9月までに判断</td>
                <td>
                    掲載内容を変更する可能性があります。<br>
                    どの情報を掲載するかで、このサイトの根本的な方針が変わる可能性があるので慎重に判断しています。
                    <ul>
                        <li>発掘当時の記録を中心に掲載するか</li>
                        <li>今の史跡情報を中心に掲載するか</li>
                        <li>またはその両方を細かく掲載するか</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>多言語化</td>
                <td>年内までに判断</td>
                <td>
                    当サイトを開設してから、一定数ではありますが海外からのアクセスが来ております。
                    これを機会に、当サイトを
                    <ul>
                        <li>英語(English)</li>
                        <li>中国語(簡体字)</li>
                    </ul>
                    対応化を視野に入れております。これらの実装のためにはさらに開発人員を増やすことになるのと
                    翻訳労力が多くかかるので、機械翻訳に頼る可能性は非常に高いです。
                </td>
            </tr>
        </tbody>
    </table>
    <h3 class="uk-heading-bullet">中止・見送り</h3>
    <table class="uk-table uk-table-responsive uk-table-divider uk-table-striped uk-table-hover">
        <thead>
            <tr>
                <th class="uk-width-medium">題目</th>
                <th class="uk-width-small">予定日</th>
                <th class="uk-table-expand">内容</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PHPフレームワーク</td>
                <td>見送り</td>
                <td>
                    PHPフレームワークを利用することで様々な恩恵を得ることができるが、
                    学習コストが別途かかることがネックになり現在は中断している。
                    どこかのタイミングでLaravelに全切り替えする可能性はあります。現在勉強中です。
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!--フッター-->
<?php include $_ENV['ROOT']."include/footer.php" ?>
