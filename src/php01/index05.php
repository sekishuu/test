<?php
// for ($i =2; $i<=10; $i=$i+2){
//     echo $i;
//     echo "<br />";
// }
// $i = 0;
// while ($i < 10) {
// if ($i == 5) {
// $i++;
// continue;
// // $iが5の時、$iに1を足す処理をし、スキップをする。
// }
// echo $i;
// $i++;
// }
// $count = 0;
// while ($count<=100) {
//     if ($count===20){
//     break;
// }
//     if ($count%3===0){
//     $count++;
//     continue;
// }
//     echo $count . "<br>";
//     $count++;
// }
// for ($i=1; $i<=50; ++$i){
//     if($i%15===0){
//         echo "FizzBuzz"."<br>";
//     }
//     elseif($i%3===0){
//         echo "Fizz"."<br>";
//     }
//     elseif($i%5===0){
//         echo "Buzz"."<br>";
//     }
//     else{
//     echo $i . "<br>";
// }
// }
$a=1;
$b=1;
while($a<=5){
while ($b<=5) {
    echo"●";
    $b++;
}
echo "<br>";
$b=1;
$a++;
}