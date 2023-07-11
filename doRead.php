<?php
require_once("../db_connect_small_project.php");
//user_profile
$sql = "SELECT * FROM user_profile";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
//user
$sqlUser = "SELECT * FROM users";
$resultUser = $conn->query($sqlUser);
$rowsUser = $resultUser->fetch_all(MYSQLI_ASSOC);

//讀取id
$idA = $_GET["id"] - 1;


//文章收藏功能
// "SELECT article.title FROM user_profile"


?>
<!doctype html>
<html lang="en">

<head>
    <title>doRead</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container d-flex justify-content-center flex-column">

        <div class="user_profile_box m-auto pt-5">
            <h1>資料如下:</h1>
            <div class="border p-3 border-primary border-3 rounded">
                <h3>Account:<?= $rowsUser[$idA]['account'] ?></h3>
                <h3>Password:<?= $rowsUser[$idA]['password'] ?></h3>
                <h3>Email:<?= $rowsUser[$idA]['email'] ?></h3>
                <h3>Last Name:<?= $rows[$idA]['last_name'] ?></h3>
                <h3>First Name:<?= $rows[$idA]['first_name'] ?></h3>
                <h3>gender:<?= $rows[$idA]['gender'] == 1 ? "女" : "男" ?></h3>
                <h3>birthday:<?= $rows[$idA]['birthday'] ?></h3>
                <h3>phone:<?= $rows[$idA]['phone'] ?></h3>
                <h3>address:<?= $rows[$idA]['address'] ?></h3>
                <h3>Created Time:<?= $rowsUser[$idA]['created_at'] ?></h3>
            </div>
        </div>
        <div class="user_profile_box m-auto pt-5">
            <h2>喜愛文章</h2>
            <div class="border p-3 border-primary border-3 rounded">
            </div>
        </div>


    </div>


</body>

</html>