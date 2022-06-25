<?php
    if(!$_SESSION['user']){
        header("location: ./index.php");
    }
?>

<!-- Navbar start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" style="font-size: 1.6rem;" href="#">BlogPoint</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><?php
                            echo $_SESSION['user'];
                        ?>
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="../backend/log_out.php"><button class="btn btn-danger">Log out</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->