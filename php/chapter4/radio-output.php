<?php require '../header.php'; ?>
<?php 
	switch($_REQUEST['meal']) {
		case '和食':
			echo '焼き魚、煮物、みそ汁、御飯、果物';
			break;
		case '洋食':
			echo 'ジュース、オムレツ、ハッシュドポテト、パン、コーヒー';
			break;
		case '中華':
			echo '春巻、餃子、卵スープ、炒飯、杏仁豆腐';
			break;
	}
?>
<?php require '../footer.php'; ?>
