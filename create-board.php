<?php
    require "dbconnect.php";
    try {
        $sql = 'INSERT INTO board(boardName) VALUES(:name)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':name', $_GET['name']);
        $stmt->execute();
        echo ("Board successfully added");
    } catch (PDOexception $error) {
        echo ("Addition error: " . $error->getMessage());
    }
    header('Location: http://localhost/TaskMap');
    exit( );
?>