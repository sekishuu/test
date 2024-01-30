<?php
// function outputNumber($a)
// {
// echo "引数の値は" . $a . "です";
// return;
// }

// outputNumber("分からない");

// function test1($a,$b){
//     $equal = $a/$b;
//     return $equal;
// }
// $five =test1(100,20);
// echo $five;

// function test2($score1,$score2,$score3)
// {
//     $total = $score1+$score2+$score3;
//     if ($total>210){
//         print "合計点は".$total."なので合格です";}
//         else{
//             echo "合計点は".$total."なので不合格です";
//         }
// }
// test2(200,30,40);
// triangle,square,trapezoid
function triangle($a,$b){
    $try_subtotal=$a*$b;
    $try_answer=$try_subtotal/2;
    echo "三角形の面積は".$try_answer."です";
}
triangle(8,6);
echo "<br>";

function square($c,$d){
    $squ_answer=$c*$d;
    print "四角形の面積は".$squ_answer."でござんす";
}
square(13,29);
echo "<br>";

function trapezoid($e,$f,$g){
    $trap_sub1=($e+$f);
    $trap_sub2=$trap_sub1*$g;
    $trap_answer=$trap_sub2/2;
    echo "台形の面積は".$trap_answer."だと思います";
}
trapezoid(10,25,9);