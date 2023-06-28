<?php
?>
<!DOCTYPE html>
<html lang="en">


<?php include_once("./includes/header_opts.php"); ?>

<body class="hamburger">
    <nav class="bg-dark text-white d-flex justify-content-between">
        <div class="d-flex">
            <span>
                <h1>Restaurant InfoSys Admin</h1>
            </span>
        </div>
        <div>
            <ul class="d-flex">
                <li>
                    <a href="#">
                        <div class="tab">
                            Overview
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="tab">
                            About
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="tab">
                            Help
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="bold">
        <div class="form">
            <form action="./admin/panel" method="post">
                <div class="container text-center">
                    <h5 class="text-center text-white">
                        Log In
                    </h5>
                    <h1 class="text-center">
                        <i class="fa fa-user text-white"></i>
                    </h1>
                </div>
                <hr class="text-white">
                <div class="form-row">
                    <div class="input-group">
                        <button type="button" class="btn btn-dark" disabled>
                            <i class="fas fa-user"></i>
                        </button>
                        <input type="text" class="form-control" name="username" id="username" placeholder="username" autocomplete="new-password">
                    </div>
                </div>
                <p></p>
                <div class="form-row">
                    <div class="input-group">
                        <button type="button" class="btn btn-dark" disabled>
                            <i class="fas fa-key"></i>
                        </button>
                        <input type="password" class="form-control" name="password" id="passInput" placeholder="password" autocomplete="new-password">
                        <button type="button" class="btn btn-dark" id="passToggle">
                            <i class="fas fa-eye" id="passEye"></i>
                        </button>
                    </div>
                </div>
                <p></p>
                <div class="form-row">
                    <div class="input-group d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary" value="submit">
                    </div>
                </div>
                <hr class="text-white">
                <p>
                    <a href="#">
                        forgotten password
                    </a>
                </p>
            </form>
        </div>
    </div>
    <?php include_once("./includes/footer.php"); ?>

    <!-- javascripts -->
    <script src="../src/js/app.js"></script>
    <script src="../src/js/bundles.js"></script>
    <!-- end javascripts -->
</body>

</html>