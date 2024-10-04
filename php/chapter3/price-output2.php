<?php require '../header.php'; ?>
<?php
$price=htmlspecialchars($_REQUEST['price']);
$count=htmlspecialchars($_REQUEST['count']);
echo $price, '円×';
echo $count, '個＝';
echo $price*$count, '円';
?>
<?php require '../footer.php'; ?>
