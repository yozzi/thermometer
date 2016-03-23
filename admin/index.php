Entrez un montant &agrave; la fois, sans espace, sans s&eacute;parateur et sans les cents.<br />
<?php
if(isset($_POST['montant'])) {
    $data = $_POST['montant'];
    $ret = file_put_contents('../montant.txt', $data, LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "Montant mise &agrave; jour";
    }
}

if(isset($_POST['objectif'])) {
    $data = $_POST['objectif'];
    $ret = file_put_contents('../objectif.txt', $data, LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "Objectif mise &agrave; jour";
    }
}
?>

<form action="index.php" method="POST">
    <input name="montant" type="text" required />
    <input type="submit" name="submit" value="Montant">
</form>

<form action="index.php" method="POST">
    <input name="objectif" type="text" required />
    <input type="submit" name="submit" value="Objectif">
</form>