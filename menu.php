<nav class="navbar navbar-expand-md navbar-light bg-warning mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TaskBoards</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=b">Boards</a>
        </li>
      </ul>
      <div class="d-flex">
        <?php
            if (!isset($_SESSION['login'])){
                require("login.php");
            }
            else{
                echo '<ul class="navbar-nav me-auto mb-2 mb-md-0">';
                echo '<li class="nav-item">';
                echo '<a class="nav-link active" aria-current="page" href="http://localhost/TaskMap/index.php?page=a">Avatar</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                echo '<img aria-current="page" style="width: 30;height: 30; margin-left: 50px" src="'.$_SESSION['avatar'].'" alt="Нет картинки">';
                echo '</li>';
                echo '<li class="nav-item">';
                echo '<a class="nav-link active" aria-current="page" href="?logout=1">Exit</a>';
                echo '</li>';
                echo '</ul>';
            }
        ?>
      </div>
    </div>
  </div>
</nav>
