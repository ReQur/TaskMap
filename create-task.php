<?php
    require "dbconnect.php";
    if (strlen($_GET['name']) >= 3){
        try {
            $sql = 'INSERT INTO task(label,text,boardId,userId) VALUES(:name,:description,:boardId,:userId)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':name', $_GET['name']);
            $stmt->bindValue(':description', $_GET['description']);
            $stmt->bindValue(':boardId', $_GET['boardId']);
            $stmt->bindValue(':userId', $_SESSION['userId']);
            $stmt->execute();
            $_SESSION['msg'] = "Task successfully added";
            // return generated id
            // $id = $pdo->lastInsertId('id');

        } catch (PDOexception $error) {
            $_SESSION['msg'] = "Addition error: " . $error->getMessage();
        }
    }
    else $_SESSION['msg'] = "Error: board name should contains at least 3 characters";

    // перенаправление на главную страницу приложения
    header('Location: http://localhost/TaskMap/index.php?page=t&boardId='.$_GET['boardId'].'');
    exit( );
?>