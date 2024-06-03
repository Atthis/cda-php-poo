<?php
  $env = parse_ini_file('../.env');
  require_once '../src/models/ChirpRepository.php';
  require_once '../src/inc.connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>test</p>
  <?php
    $chirpsRepo = new ChirpRepository($db);

    var_dump($chirpsRepo->getAllChirps());
  ?>
</body>
</html>