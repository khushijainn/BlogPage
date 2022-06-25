<?php include "./component/links.php"; ?>

<body>

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="../backend/login.php" method="post" class="border border-danger border-5 p-5">
            <h4 class="text-center">Admin Login</h4>
            <input type="text" name="username" class="form-control my-4" placeholder="Username" style="width: 300px;">
            <input type="password" name="password" class="form-control my-4" placeholder="Password" style="width: 300px;">
            <center><button name="login" class="btn btn-danger">Login</button></center>
        </form>
    </div>

</body>

</html>