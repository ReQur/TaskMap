<?php
    require "dbconnect.php";
    try {
        $sql = 'DELETE FROM board WHERE boardId=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        echo ("Board successfully deleted");
    } catch (PDOexception $error) {
        echo ("Deletion error: " . $error->getMessage());
    }
    header('Location: http://localhost/TaskMap');
    exit( );
?>