<table>
	<tr>
	<th>商品番号</th>
	<th>商品名</th>
	<th>価格</th></tr>
<?php require '../header.php'; ?>
<?php

$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password');

foreach ($pdo->query('select * from product') as $row) {
	// echo '<tr>';
	// echo '<td>';
	// echo $row['id'], ':';
	// echo '</td>';
	// echo '<td>';
	// echo $row['name'], ':';
	// echo '</td>';
	// echo '<td>';
	// echo $row['price'], ':';
	// echo '</td>';
	// echo '</tr>';

	echo '<tr>';
	echo '<td>',  $row['id'],'</td>';
	echo '<td>',  $row['name'],'</td>';
	echo '<td>',  $row['price'],'</td>';
	echo '</tr>';
	echo "\n";
}
?>
<?php require '../footer.php'; ?>
</table>