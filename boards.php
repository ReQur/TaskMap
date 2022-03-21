<h1>Boards:</h1>
<table border='1'>
<?php
$result = $conn->query('SELECT * FROM board WHERE userId='.$_SESSION['userId']);
while ($row = $result->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['createdDate'] . '</td><td>' . $row['boardName'] . '</td>';
    echo '<td><a href=delete-board.php?id='.$row['boardId'].'>Delete</a></td>';
    echo '<td><a href=http://localhost/TaskMap/index.php?page=t&boardId='.$row['boardId'].' >Open</a></td>';
    echo '</tr>';
}
?>
</table>
<h3>Create new board</h3>
<form method="get" action="create-board.php" class="input-group mb-3" style="width:300px;">
    <input type="text" name="name" class="form-control" placeholder="Board Name" aria-label="BoardName" aria-describedby="button-addon2">
    <input type="submit" value="Create" class="btn btn-outline-secondary" id="button-addon2">
</form>

