<?php require '../header.php'; ?>
<form action="radio-outoput.php">
    <p>お食事を選択してください。</p>
    <p><input type="radio" name="meal" value="和食" checked>和食</p>
    <p><input type="radio" name="meal" value="洋食">洋食</p>
    <p><input type="radio" name="meal" value="中華">中華</p>
    <p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>