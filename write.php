<?php
if(isset($_POST['field1'])) {
    $data = $_POST['field1'];
    $ret = file_put_contents('montant.txt', $data, LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>