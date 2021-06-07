<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-7</title>
</head>
<body>
  
  <?php 
    $students = [
      [
        'name' => 'Fabrizio',
        'lastname' => 'Rozzi',
        'votes' => [10,10,10,10]
      ],
      [
        'name' => 'Giulia',
        'lastname' => 'Gnoccolona',
        'votes' => [10,6,5,8]
      ],
      [
        'name' => 'Luca',
        'lastname' => 'Logallo',
        'votes' => [2,2,2,2]
      ],
      [
        'name' => 'Dio',
        'lastname' => 'Anubi',
        'votes' => [1,1,1,2]
      ],

    ]
  
  ?>
  
  <div>
      <?php foreach($students as $student){?>
      <h3>Nome: <?php echo $student['name'] ?></h3>
      <h3>Cognome: <?php echo $student['lastname'] ?></h3>
        
        <h3>Media: <?php echo array_sum($student['votes']) / count($student['votes']) ?></h3>
      <?php 
          
      }
      ?>  
  </div>
</body>
</html>