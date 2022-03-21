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
            if (!isset($_SESSION['login']))
                require("login.php");
            else
                echo "<a href='?logout=1'>Exit</a>";
        ?>
      </div>
    </div>
  </div>
</nav>
