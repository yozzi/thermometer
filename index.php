<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StartUp Thermometer</title>
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
    
<body>
    
<?php
    $montant = trim(file_get_contents('montant.txt'));
    $objectif = trim(file_get_contents('objectif.txt'));   
    $pourcentage = ( $montant / $objectif) * 100;
    $pourcentage = round($pourcentage);
?>
  <section>
    <div class="container">
      <div id="gloss"></div>
        <div id="grad"></div>
      <div class="thermometer" id="thermometer"></div>
      <div id="boule"></div>
      <div id="boule-out"></div>
    </div>
  </section>
    
<?php echo 'Montant: ' . $montant . ' Objectif: ' . $objectif?>
    
    <a href="<?php echo $_SERVER['REQUEST_URI'] ?>">Click to refresh the page</a>
  
  <script src="js/jquery.js"></script>
  <script src="js/jquery.thermometer.js"></script>
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
</body>
</html>