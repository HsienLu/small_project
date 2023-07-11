<?php
echo $_POST["firstName"] . "<br>";

echo $_POST["lastName"] . "<br>";
echo $_POST["birthday"] . "<br>";
echo $_POST["gender"] . "<br>";
echo $_POST["email"] . "<br>";
echo $_POST["account"] . "<br>";
echo $_POST["password"] . "<br>";
echo $_POST["confirmPassword"];

$sql = "INSERT INTO users (name, phone, email, created_at, valid) VALUES ('$name', '$phone', '$email', '$now',1)";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Password Reset - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .bg-keyboard {
            background-image: url("https://i.pinimg.com/564x/2a/36/aa/2a36aade4f27d271f15f01df08f2e518.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class=" bg-keyboard">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">新增會員成功</h3>
                                </div>
                                <div class="card-body">
                                    <div class="small mb-3 text-muted">
                                        <h5>新增資料如下</h5>
                                    </div>
                                    <div class="py-2 container">
                                        <table class="table table-bordered table-striped border-5 ">
                                            <tr class="row">
                                                <td class="col">Last Name</td>
                                                <td class="col"><?= $_POST["lastName"] ?></td>
                                            </tr>
                                            <tr class="row">
                                                <td class="col">First Name</td>
                                                <td class="col"><?= $_POST["firstName"] ?></td>
                                            </tr>
                                            <tr class="row">
                                                <td class="col">Birthday</td>
                                                <td class="col"><?= $_POST["birthday"] ?></td>
                                            </tr>
                                            <tr class="row">
                                                <td class="col">Gender</td>
                                                <td class="col"><?= $_POST["gender"] == 1 ? "女" : "男" ?></td>
                                            </tr>
                                            <tr class="row">
                                                <td class="col">Email</td>
                                                <td class="col"><?= $_POST["email"] ?></td>
                                            </tr>
                                            <tr class="row">
                                                <td class="col">Password</td>
                                                <td class="col"><?= $_POST["password"] ?></td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>