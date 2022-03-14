<?php
    date_default_timezone_set('Asia/Yekaterinburg');
    require "dbconnect.php";
    require "auth.php";
    require "menu.php";
    switch ($_GET['page']){
        case 'b':
            require "boards.php";
            break;
        case 't':
            if (isset($_SESSION['login'])){
                require "open-board.php";
                require "task-form.php";
            }
            else{
                echo 'Authenticate to get access';
            }
            break;
    }

    require "message.php";
    $_SESSION['msg'] = '';
?>