<?php require '../header.php'; ?>
<p>ご興味のある商品ジャンルを全て選んでください。</p>
<form action="checks-output.php" method="post">
<?php
$genre=['カメラ','パソコン','時計','家電','書籍','文房具','食品'];?>
<?php 
foreach($genre as $item):?>
<p><input type="text" value="<?php echo '$item' ?>"></p>
<?php endforeach; ?>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>
