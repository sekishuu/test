<?php
// $a = 7;
// if ($a === 5){echo "\$aは5です";}
// elseif ($a ===7){echo "\$aは7です";}
// else{echo "\$aは5と7以外です";};

// $people = "Saburo";
// switch ($people){
// case "Taro":
// echo "太郎です";
// break;
// case "Jiro":
// echo "次郎です";
// break;
// case "Saburo":
// echo "三郎です";
// }

// $a = 7;

// $result = ($a === 7) ? "TRUE" : "FALSE";
// echo $result;
function goaisatsu($namae) {
    $message = 'こんにちは'. $namae.'君！';
    return $message;
}
echo goaisatsu('太郎');
$test = [ 1, 2, 3, 4, 5 ];
$result = array_rand( $test );
var_dump($result);

echo mt_rand();
?>