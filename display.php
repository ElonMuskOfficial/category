<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
</head>

<body>
    <?php
    $sql = "select * from stat";
    $query = mysqli_query($con, $sql);
    while ($q = mysqli_fetch_array($query)) {
    ?>
        <a href="view.php?id=<?php echo $q['id'] ?>">
            <button type="button"><?php echo $q['languages'] ?></button><br><br>
        </a>
    <?php
    }
    ?>
    <hr>
    <?php
    $post = "select * from post";
    $post_query = mysqli_query($con, $post);
    while ($pq = mysqli_fetch_array($post_query)) {
    ?>
        <a href="postview.php?id=<?php echo $pq['id'] ?>">
            <h1><?php echo $pq['name'] ?></h1>
        </a>
    <?php
    }
    ?>
</body>

</html>