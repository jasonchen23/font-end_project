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

<body>
    <div class="container">
        <!-- <div class="py-2">
            <a href="./create-user.php" class="btn btn-info">新增使用者</a>
        </div> -->
        <?php
        $data = $result->fetch_all(MYSQLI_ASSOC);
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>comments</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // method 1
                // if($result -> num_rows> 0):
                //     while($row = $result-> fetch_assoc()):
                // method 2
                if ($result->num_rows > 0) :
                    foreach ($data as $row) :
                ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td>Anonymous</td>
                            <td><?= $row["comment"] ?></td>
                            <td> <a href="doDelete.php?id=<?= $row["id"] ?>" class="btn btn-info"> Delete</a></td>
                        </tr>
                        <?php
                        // method 1
                        // endwhile; 
                        ?>
                    <?php
                    // method 2
                    endforeach;
                    ?>
                <?php else : ?>
                    <tr>
                        <td>No Comment</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>