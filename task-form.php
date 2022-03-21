    <h2>Создание задачи</h2>
    <form method="get" action="create-task.php">
        <p><label>
                Task Name: <input type="text" name="name">
           </label>

        <p><label>
                Description: <input type="text" name="description">
           </label>

         <p><label>
         <?php
                 echo 'BoardId: <input type="text" name="boardId" value="'.$_GET['boardId'].'"readonly>';
         ?>
            </label>
        <p><input type="submit" value="Create">
    </form>