<table border='1'>
    <?php
    echo '<tr>
            <th>Created Date</th>
            <th>Name</th>
            <th>Description</th>
            <th>Act</th>
           </tr>';
    $result = $conn->query("SELECT * FROM board WHERE boardId=".$_GET['boardId']);
    echo '<h1>Tasks of board '.$result->fetch()['boardName'].':</h1>';

    $result = $conn->query('SELECT task.*, board.boardName FROM task LEFT OUTER JOIN board ON task.boardId=board.boardId WHERE task.userId='.$_SESSION['userId'].' AND task.boardId='.$_GET['boardId']);
    while ($row = $result->fetch()) {
        echo '<tr>';
        echo '<td>'.$row['createdDate'].'</td>
              <td>'.$row['label'].'</td>
              <td>'.$row['text'].'</td>';

        echo '<td><a href=delete-task.php?id='.$row['taskId'].'>Delete</a></td>';
        echo '</tr>';
    }
    ?>
</table>
