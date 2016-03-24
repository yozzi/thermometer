<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StartUp Thermometer</title>
  <link href="../css/styles.css" rel="stylesheet" type="text/css" />
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
    
<body>
    <div id="bg">
    <div class="container">
        <div class="row">
            <div class="zone col-xs-12">
                <div class="well">Entrez un montant &agrave; la fois, <strong>sans espace</strong>, <strong>sans s&eacute;parateur</strong> et <strong>sans les cents</strong>.</div>
                <?php
                if(isset($_POST['montant'])) {
                    $data = $_POST['montant'];
                    $ret = file_put_contents('../montant.txt', $data, LOCK_EX);
                    if($ret === false) {
                        die('Impossible d\'&eacute;crire dans le fichier');
                    }
                    else {
                        echo "<div class=\"alert alert-info\" role=\"alert\">Montant mis &agrave; jour</div>";
                    }
                }

                if(isset($_POST['objectif'])) {
                    $data = $_POST['objectif'];
                    $ret = file_put_contents('../objectif.txt', $data, LOCK_EX);
                    if($ret === false) {
                        die('Impossible d\'&eacute;crire dans le fichier');
                    }
                    else {
                        echo "<div class=\"alert alert-info\" role=\"alert\">Objectif mis &agrave; jour</div>";
                    }
                }
                ?>
            </div>
            <div class="zone col-xs-12">
                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
                    <div class="form-group">
<!--                        <label for="montant">Montant</label>-->
                        <div class="input-group">
                          <input placeholder="Montant" class="form-control" id="montant" name="montant" type="text" required />
                            <span class="input-group-addon"><strong>,00$</strong></span>
                        </div>
                    </div>
                    <input class="btn btn-primary pull-right" type="submit" name="submit" value="Envoyer" />
                </form>
            </div>
            <div class="zone col-xs-12">
                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
                    <div class="form-group">
<!--                        <label for="objectif">Objectif</label>-->
                        <div class="input-group">
                            <input placeholder="Objectif" class="form-control" id="objectif" name="objectif" type="text" required />
                            <span class="input-group-addon"><strong>,00$</strong></span>
                        </div>
                    </div>
                    <input class="btn btn-danger pull-right" type="submit" name="submit" value="Envoyer" /> 
                </form>
            </div>
        </div>
    </div>
        </div>
</body>
</html>