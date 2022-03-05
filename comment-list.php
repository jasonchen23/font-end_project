<?php

require_once("db_connect.php");
$sql = "SELECT * FROM comments WHERE valid=1 order by id DESC";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
    <title>comment-list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    .blue{
    background-color: aqua;
    width: 300px;
    height: 500px;
    }
</style>
<body>
    <div class="container">
        <!-- <div class="py-2">
            <a href="./create-user.php" class="btn btn-info">新增使用者</a>
        </div> -->
        <?php $data = $result->fetch_all(MYSQLI_ASSOC); ?>
        <div class="row">
            <div class="d-felx col-lg-4 col-md-6 blue"><h1>click on subjct</h1>
                <hr>
                <?php
                if ($result->num_rows > 0) :
                    foreach ($data as $row) :
                ?>
                <div class="d-flex justify-content-center">
                    <h3><a href=""><?=$row["titles"]?></a></h3>
                </div>
                <?php
                    // method 2
                    endforeach;
                ?>
                <?php else : ?>
                    <div class="d-flex justify-content-center">
                        <p>No Comment</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-8 col-md-6"><h1>---Details---</h1>
                <hr>
                <div class="py-2">
                    <p>提問主題：</p>
                    <p>敘述你的問題:</p>
                    <a href="doDelete.php?id=<?= $row["id"] ?>" class="btn btn-info"> Delete</a>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>