    <h2>Создание задачи</h2>
    <form method="get" action="create-task.php" style="width:400px;">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Task Name</span>
            <input type="text" name="name" class="form-control" placeholder="Task Name" aria-label="TaskName" aria-describedby="basic-addon1">
            <input type="submit" value="Create" class="btn btn-outline-secondary" id="button-addon2">
        </div>
        <div class="input-group">
          <span class="input-group-text">Description</span>
          <textarea name="description" class="form-control" placeholder="Shor description of task"></textarea>
        </div>
        <?php
              echo 'BoardId: <input type="text" name="boardId" value="'.$_GET['boardId'].'"readonly>';
        ?>
    </form>