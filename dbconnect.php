<?php
    require __DIR__ . '/vendor/autoload.php';
    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->safeLoad();


    try {
      $conn = new PDO("mysql:host=$_ENV[servername];dbname=$_ENV[database]", $_ENV['username'], $_ENV['password']);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>