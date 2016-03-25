<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StartUp Thermometer</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
    
<body>
    
<?php
    $montant = trim(file_get_contents('montant.txt'));
    $objectif = trim(file_get_contents('objectif.txt'));   
    $pourcentage = ( $montant / $objectif) * 100;
    $pourcentage = round($pourcentage);
?>
<div class="container">
    <div class="row">
        <div class="zone col-xs-5 col-xs-offset-1 col-sm-4 col-sm-offset-2">
            <div id="gloss"></div>
            <div id="grad"></div>
            <div class="thermometer" id="thermometer"></div>
            <div id="boule"></div>
            <div id="boule-out"></div>
        </div>
        <div class="zone col-xs-3 col-sm-4">
            <div class="alert alert-danger objectif"><?php echo 'Objectif : ' . $objectif ?> $</div>
            
            <br />
    
            <div class="alert alert-success montant"><div class="milestone-count"><?php echo $montant; ?></div> $</div>
            
            <br />
    
            <a class="btn btn-primary pull-right" href="<?php echo $_SERVER['REQUEST_URI'] ?>"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
        </div>
        <div class="zone col-xs-3 col-sm-2">
        </div>
    </div>
</div>
    

  
  <script src="js/jquery.thermometer.js"></script>
  <script src="js/jquery.counterup.js"></script>
  <script src="js/waypoint.js"></script>
  <script>
    (function($) {
      $(function() {
        $('.thermometer').thermometer({
          percent: <?php echo $pourcentage ?>, 
          speed: 6000,
          orientation: 'vertical'
        })
      });
    })(jQuery);
  </script>

    
<script type="text/javascript">
    jQuery(document).ready(function( $ ) {
        jQuery('.milestone-count').counterUp({
            time: 6000 // the speed time in ms
        });
    });
</script>
</body>
</html>