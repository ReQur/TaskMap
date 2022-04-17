<?php
    require "dbconnect.php";
        if (strlen($_GET['name']) >= 3){
            try {
                $sql = 'INSERT INTO board(boardName,userId) VALUES(:name,:userId)';
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':name', $_GET['name']);
                $stmt->bindValue(':userId', $_SESSION['userId']);
                $stmt->execute();
                $_SESSION['msg'] = "Board successfully added";
                // return generated id
                // $id = $pdo->lastInsertId('id');

            } catch (PDOexception $error) {
                $_SESSION['msg'] = "Addition error: " . $error->getMessage();
            }
        }
        else $_SESSION['msg'] = "Error: board name should contains at least 3 characters";

        // перенаправление на главную страницу приложения
        header('Location: http://localhost/TaskMap/index.php?page=b');
        exit( );
?>