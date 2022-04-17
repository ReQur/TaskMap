<?php
    require "dbconnect.php";
    if ($file = fopen($_FILES['filename']['tmp_name'], 'r+')){
        //получение расширения
        $ext = explode('.', $_FILES["filename"]["name"]);
        $ext = $ext[count($ext) - 1];
        $filename = 'file' . rand(100000, 999999) . '.' . $ext;

        $resource = Container::getFileUploader()->store($file, $filename);
        $picture_url = $resource['ObjectURL'];
        echo $picture_url;
    }
    else{
        $_SESSION['msg'] = "No photo";
    }

    try {
        require "delete-avatar.php";
        $sql = 'UPDATE user SET avatar=:picture_url WHERE userId=:userId';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':picture_url', $picture_url);
        $stmt->bindValue(':userId', $_SESSION['userId']);
        $stmt->execute();
        $_SESSION['msg'] = "Avatar successfully added";
        $_SESSION['avatar'] = $picture_url;

    } catch (PDOexception $error) {
        $_SESSION['msg'] = "Avatar addition error: " . $error->getMessage();
    }
        // перенаправление на главную страницу приложения
    header('Location: http://localhost/TaskMap/index.php?page=b');
    exit();
?>