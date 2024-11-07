<?php require '../header.php'; ?>
<p>お名前のフリガナを入力してください。</p>
<form action="kana-output.php" method="post">
<input type="text" name="furigana">
<input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>
