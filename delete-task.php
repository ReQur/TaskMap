<?php
    require "dbconnect.php";
    try {
        $sql = 'DELETE FROM task WHERE taskId=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $_SESSION['msg'] = "Task successfully deleted";
        // return generated id
        // $id = $pdo->lastInsertId('id');
    } catch (PDOexception $error) {
        $_SESSION['msg'] = "Deletion Error: " . $error->getMessage();
    }
    // перенаправление на главную страницу приложения
    header('Location: http://localhost/TaskMap/index.php?page=t');
    exit( );
?>