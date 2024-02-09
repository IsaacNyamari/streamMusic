<?php session_start() ?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="./">StreamMusic <i style="color: green" class="fa-brands fa-spotify"></i> </a>

    <!-- Toggler/collapsible Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">

            <?php if (!isset($_SESSION['logged_in'])) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./artists">Artists </a></li>
                <li class="nav-item">
                    <a class="nav-link" href="./latest">Latest </a></li>
                <li class="nav-item">
                    <a class="nav-link" href="./login">Login <i class="fa-solid fa-sign-in"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./add-artist">Register <i class="fa-solid fa-pen"></i></a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="artists/add-song.php">New Song <i class="fa-solid fa-music"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout">Logout <i class="fa-solid fa-sign-out"></i></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>