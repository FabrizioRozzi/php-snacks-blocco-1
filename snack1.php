<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-1</title>
</head>
<body>
  <?php 
    $calendario = 
    [
      "Olimpia - Milano Varese | 50 - 52",
      "Sassari - Olimpia Milano | 58 - 56",
      "Varese - Sassari | 45 - 40",
      "Stella Azzurra - Varese | 80 - 79",
      "Sassari - Stella Azzurra | 60 - 78",
      "Trieste - Partenope | 50 - 52",
      "Olimpia Milano - Trieste | 70 - 52",
      "Partenope - Lazio | 100 - 0",
      "Lazio - Varese | 50 - 52",
      "Olimpia Milano - Olimpia Cagliari | 50 - 52"
    ];
      foreach($calendario as $match ){
        var_dump( $match) ;
      }
   
   
  ?>  
</body>
</html>