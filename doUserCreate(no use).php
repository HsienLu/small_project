<?php
// echo $_POST["firstName"] . "<br>";

// echo $_POST["lastName"] . "<br>";
// echo $_POST["birthday"] . "<br>";
// echo $_POST["gender"] . "<br>";
// echo $_POST["email"] . "<br>";
// echo $_POST["account"] . "<br>";
// echo $_POST["password"] . "<br>";
// echo $_POST["confirmPassword"];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container d-flex justify-content-center">

        <div class="user_profile_box m-auto pt-5">
            <h1>新增資料完成</h1>
            <h2>資料如下:</h2>
            <div class="border p-3 border-primary border-3 rounded">
                <h3>firstName:<?= $_POST["firstName"] ?></h3>
                <h3>lastName:<?= $_POST["lastName"] ?></h3>
                <h3>birthday:<?= $_POST["birthday"] ?></h3>
                <h3>gender:<?= $_POST["gender"] == 1 ? "女" : "男" ?></h3>
                <h3>email:<?= $_POST["email"] ?></h3>
                <h3>password:<?= $_POST["password"] ?></h3>
                <h3>confirmPassword:<?= $_POST["confirmPassword"] ?></h3>
            </div>
        </div>


    </div>


</body>

</html>