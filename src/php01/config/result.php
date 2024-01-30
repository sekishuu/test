<?php
$name = htmlspecialchars($_POST['text'], ENT_QUOTES);
$set = htmlspecialchars($_POST['radio'], ENT_QUOTES);
$count = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "私の名前は、" . $name .
"<br>".
"ご希望の商品は、".$set.
"<br>".
"注文数は、".$count;