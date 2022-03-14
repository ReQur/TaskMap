<?php
    if (!isset($_SESSION['login']) )
    {
        echo "<form method='post'>";
        echo "User name:<input type=text name='login'/><br>";
        echo "Password:<input type=password name='password'/><br>";
        echo "<input type='submit' value='Auth'/>";
        echo "</form>";
    }
    else {
        echo " Hello, " . $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] . "<br>";
        echo "<a href='?logout=1'>Exit</a>";
    }
?>
<ul >
    <li style="display: inline"><a href="index.php?page=b">Boards</a></li>
</ul>