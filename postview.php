<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $sql1 = "select * from post where id = $id";
        $row = mysqli_query($con, $sql1);
    } else {
        header("location:display.php");
        exit;
    }
    while ($r = mysqli_fetch_array($row)) { ?>
        <h2>Post-id := <?php echo $r['id'] ?></h2>
        <h2>Post-name := <?php echo $r['name'] ?></h2>
        <h2>Post-stat_id := <?php echo $r['stat_id'] ?></h2>
    <?php }
    $id++
    ?>
</body>

</html>