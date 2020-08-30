<?php
//API Key
$api = $_ENV['WEATHER_API'];

//URL定義
$url = [
    ["http://api.openweathermap.org/data/2.5/weather?zip=520-0861,JP&units=metric&APPID=".$api,"石山寺"],
    ["http://api.openweathermap.org/data/2.5/weather?zip=520-0047,JP&units=metric&APPID=".$api,"浜大津"],
    ["http://api.openweathermap.org/data/2.5/weather?zip=520-0112,JP&units=metric&APPID=".$api,"日吉大社"],
    ["http://api.openweathermap.org/data/2.5/weather?zip=520-0525,JP&units=metric&APPID=".$api,"小野"],
    ["http://api.openweathermap.org/data/2.5/weather?zip=520-0514,JP&units=metric&APPID=".$api,"びわ湖バレイ"],
    ["http://api.openweathermap.org/data/2.5/weather?zip=520-0501,JP&units=metric&APPID=".$api,"北小松"]
];

//繰り返し
for($i = 0; $i < count($url); $i++){
    //取得
    $json = file_get_contents($url[$i][0]);
    //文字化け対策
    $json = mb_convert_encoding($json,'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    //連想配列
    $arr = json_decode($json,true);
    //格納
    $weather[$i][0] = $url[$i][1];                                  //町名
    $weather[$i][1] = getCondition($arr['weather'][0]['main']);     //天気
    $weather[$i][2] = $arr['main']['temp'];                         //気温
    $weather[$i][3] = $arr['main']['temp_max'];                     //最高気温
    $weather[$i][4] = $arr['main']['temp_min'];                     //最低気温
    $weather[$i][5] = $arr['main']['humidity'];                     //湿度
    $weather[$i][6] = $arr['wind']['speed'];                        //風速
}

//天気を日本語表記にする独自関数
function getCondition($condition){
    switch ($condition){
        case 'Clear':
            return '晴れ';
            break;
        case 'Clouds';
            return '曇り';
            break;
        case 'Rain';
            return '雨';
            break;
        case 'Thunderstorm';
            return '雷雨';
            break;
        case 'Snow';
            return '雪';
            break;
        case 'Mist';
            return '靄';
            break;
        case 'Fog';
            return '霧';
            break;
        case 'Squall';
            return '強風';
            break;
        case 'Tornado';
            return '暴風';
            break;
        default:
            return $condition;
    }
}
?>
<div class="uk-container uk-margin-large<?= $style[0] ?> uk-animation-fade">
    <h2 class="uk-heading-bullet">大津市の天気（<?= date("G:i") ?>）</h2>
    <div class="uk-overflow-auto">
    <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-hover">
        <thead>
        <tr>
            <th class="uk-table-expand">観測地</th>
            <th class="uk-width-small">天気</th>
            <th class="uk-width-small">気温</th>
            <th class="uk-width-small">最高気温</th>
            <th class="uk-width-small">最低気温</th>
            <th class="uk-width-small">湿度</th>
            <th class="uk-width-small">風速</th>
        </tr>
        </thead>
        <tbody>
        <?php
            for($i = 0; $i < count($weather); $i++){
                print "<tr>";
                print "<td>".$weather[$i][0]."</td>";
                print "<td>".$weather[$i][1]."</td>";
                print "<td>".$weather[$i][2]."℃</td>";
                print "<td>".$weather[$i][3]."℃</td>";
                print "<td>".$weather[$i][4]."℃</td>";
                print "<td>".$weather[$i][5]."%</td>";
                print "<td>".$weather[$i][6]."m/sec</td>";
                print "</tr>";
            }
        ?>
        </tbody>
    </table>
    </div>
</div>