    <h2>Load avatar</h2>
    <form method="post" action="load-avatar.php" style="width:600px;" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">New avatar</span>
            <input type="file" name="filename" accept="image/*" class="form-control" placeholder="load file" aria-label="avatar" aria-describedby="basic-addon1">
            <input type="submit" value="Load" class="btn btn-outline-secondary" id="button-addon2">
        </div>
    </form>
    <h2>Delete current avatar</h2>
    <form method="get" action="delete-avatar.php" style="width:600px;">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Delete avatar</span>
            <input type="submit" value="Delete" class="btn btn-outline-secondary" id="button-addon2">
        </div>
    </form>