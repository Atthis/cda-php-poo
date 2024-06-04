<?php
$env = parse_ini_file('../.env');
require_once '../vendor/autoload.php';
require_once '../src/inc.connection.php';

use Models\ChirpRepository;
use Models\Chirp;


define('APP_PATH', realpath(__DIR__ . '/../src'));

  // $router = new App\Router();
  // $router->route();
  
  // require_once '../src/models/ChirpRepository.php';
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
    $chirp = new Chirp(0, 'test', 'momo', new DateTime(), null);
    $chirpsRepo = new ChirpRepository($db);


    var_dump($chirpsRepo->getAll());
  ?>
</body>
</html>