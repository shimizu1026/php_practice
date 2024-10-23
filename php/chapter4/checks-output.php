<?php require '../header.php' ?>
<?php 
if (isset($_REQUEST['genre'])){
foreach ($_REQUEST['genre'] as $item) {
    echo '<p>', $item, '</p>';

}
echo 'に関するお買い得情報をお送りさせていただきます。';
}
;?>

<?php require '../footer.php' ?>