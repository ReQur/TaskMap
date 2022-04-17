<?php
    require "dbconnect.php";
        //проверка что текущий пользователь является владельцем категории

    try {
        $result = $conn->query("SELECT * FROM board WHERE userId=". $_SESSION['userId']." AND boardId=".$_GET['id']);
        if ($result->rowCount() == 0) throw new PDOException('Board not found', 1111 );
        $sql = 'DELETE FROM board WHERE boardId=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $_SESSION['msg'] = "Board successfully deleted";
        // return generated id
        // $id = $pdo->lastInsertId('id');
    } catch (PDOexception $error) {
        $_SESSION['msg'] = "Deletion error: " . $error->getMessage();
    }
    // перенаправление на главную страницу приложения
    header('Location: http://localhost/TaskMap/index.php?page=b');
    exit( );
?>
