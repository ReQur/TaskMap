<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
    date_default_timezone_set('Asia/Yekaterinburg');
    require "dbconnect.php";
    require "auth.php";
    require "menu.php";
    switch ($_GET['page']){
        case 'b':
            if (isset($_SESSION['login'])){
                require "boards.php";
            }
            else{
                echo 'Authenticate to get access';
            }
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
        case 'a':
            if (isset($_SESSION['login'])){
                require "avatar-form.php";
            }
            else{
                echo 'Authenticate to get access';
            }
            break;
    }

    require "message.php";
    $_SESSION['msg'] = '';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>