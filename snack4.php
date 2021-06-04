<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>
  <?php 
    

    function randomNumber($max, $min, $limit){
      $arrFunction=[];
      while(count($arrFunction) < $limit ){
        $nEstratto= rand($min, $max);
        if(!in_array($nEstratto, $arrFunction)){
          $arrFunction[]=$nEstratto;
        }
      }
      var_dump($arrFunction);
    }

    randomNumber(1,100,15);
  ?>
</body>
</html>