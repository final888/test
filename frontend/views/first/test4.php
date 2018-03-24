<?php
echo "$name";
$link1 = yii::$app->urlManager->createUrl([
    'first/test4',
    'xname' =>'yosspon',
    'yname' => 'nuntalit'
    ]);
echo "<br>";

$link2 = yii::$app->urlManager->createUrl([
    'first/test3',
    'xname' =>'ยศพล',
    'yname' => 'นันตาลิต'
    ]);
echo "<br>";

?>
<hr>
<a href="<?= $link1?>"> EN </a>
<hr>
<a href="<?= $link2?>"> TH </a>


