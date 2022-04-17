<?php
    require "dbconnect.php";
       try {
        try {
            $resource = Container::getFileUploader()->delete($_SESSION['avatar']);
        } catch (S3Exception $e) {
            $_SESSION['msg'] = $e->getMessage();
        }

        $sql = 'UPDATE user SET avatar=NULL WHERE userId=:userId';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':userId', $_SESSION['userId']);
        $stmt->execute();
        $_SESSION['msg'] = "Avatar successfully deleted";
        $_SESSION['avatar'] = $picture_url;

    } catch (PDOexception $error) {
        $_SESSION['msg'] = "Avatar deletion error: " . $error->getMessage();
    }
        // перенаправление на главную страницу приложения
    header('Location: http://localhost/TaskMap/index.php?page=b');
    exit();
?>