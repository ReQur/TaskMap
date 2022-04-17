<?php
//   $err_msg = '';

    if (isset($_POST["login"]) and $_POST["login"]!='')
    {
        try {
            $sql = 'SELECT userId, firstName, lastName, md5PasswordHash, avatar FROM user WHERE email=(:login)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':login', $_POST['login']);
            $stmt->execute();
            //$_SESSION['msg'] = "Вы успешно вошли в систему";
            // return generated id
            // $id = $pdo->lastInsertId('id');

        } catch (PDOexception $error) {
            $msg = "Authentication error: " . $error->getMessage();
        }
        // если удалось получить строку с паролем из БД
        if ($row=$stmt->fetch(PDO::FETCH_LAZY))
        {
            if (MD5($_POST["password"])!= $row['md5PasswordHash']) $msg = "Wrong password!";
            else {
                // успешная аутентификация
                $_SESSION['login'] = $_POST["login"];
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['userId'] = $row['userId'];
                $_SESSION['avatar'] = $row['avatar'];
                //if ($row['is_teacher']==1) $_SESSION['teacher'] = true;
                $msg =  "Successfully authenticate";
                }
        }
        else $msg =  "Wrong username!";

    }

    if (isset($_GET["logout"]))
    {
        session_unset();
        $_SESSION['msg'] =  "Successfully logout";
        header('Location: http://localhost/TaskMap');
        exit( );
    }
?>