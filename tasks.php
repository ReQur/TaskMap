<h1>Задачи:</h1>
<table border='1'>
    <?php
    echo '<tr>
            <th>Created Date</th>
            <th>Name</th>
            <th>Description</th>
            <th>Board</th>
            <th>Act</th>
           </tr>';
    $result = $conn->query("SELECT task.*, board.boardName FROM task LEFT OUTER JOIN board ON task.boardId=board.boardId WHERE task.userId=".$_SESSION['userId']);
    while ($row = $result->fetch()) {
        echo '<tr>';
        echo '<td>'.$row['createdDate'].'</td>
              <td>'.$row['label'].'</td>
              <td>'.$row['text'].'</td>
              <td>'.$row['boardName'].'</td>';

        echo '<td><a href=delete-task.php?id='.$row['taskId'].'>Delete</a></td>';
        echo '</tr>';
    }
    ?>
</table>
