<?php
$url1=yii::$app->urlManager->createAbsoluteUrl("test/index");

?>

<a href="<?=$url1?>"> ไปหน้า index</a>

<br>

<?php
$url2=yii::$app->urlManager->createAbsoluteUrl(["test/test3",'sname'=>"sarintar",'fname'=>"deesawat"]);

?>

<a href="<?=$url2?>"> ไปหน้า test3</a>
