<?php
    $servername = "localhost";
    $username = "root";
    $password = "rootPassword";
    $database = "taskmap";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    echo '<br>';
    $result = $conn->query("SELECT * FROM user");
    while ($row = $result->fetch())
        echo $row['userId'].' '.$row['firstName'].'<br>';
    echo " ";
?>