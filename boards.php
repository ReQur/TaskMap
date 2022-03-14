<h1>Boards:</h1>
<table border='1'>
<?php
$result = $conn->query("SELECT * FROM board");
while ($row = $result->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['createdDate'] . '</td><td>' . $row['boardName'] . '</td>';
    echo '<td><a href=delete-board.php?id='.$row['boardId'].'>Delete</a></td>';
    echo '<td><a href=http://localhost/TaskMap/index.php?page=t&boardId='.$row['boardId'].' >Open</a></td>';
    echo '</tr>';
}
?>
</table>
<h2>Create new board</h2>
<form method="get" action="create-board.php">
    <input type="text" name="name">
    <input type="submit" value="Create">
</form>

