<?php
    if(isset($_GET['logout']))
    {
        setcookie("firstName","kda",time()-999999);
    }
    if(isset($_GET['login'])){
        setcookie("firstName",$_GET['login'],time()+15000);
    }
    if (isset($_COOKIE['firstName']))
    {
        echo ('Hello, '.$_COOKIE['firstName'].'!');
        echo ('<a href=cookie.php?logout=1>Exit<a>');
    }
    else{
        echo ('<a href=cookie.php?login=kda>Auth<a>');
    }
?>