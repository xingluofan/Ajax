<?php
$content = file_get_contents("info.json");
//传输过去的是字符串,要翻译成数组
$res = json_decode($content);

$randIndex = array_rand($res , 3);//取出的是索引值

$randArr = array();

for ( $i = 0 ; $i < count($randIndex) ; $i++ ) {
    array_push($randArr , $res[ $randIndex [ $i ]]);
}
//$last = array_unique($randArr)
echo json_encode($randArr);
