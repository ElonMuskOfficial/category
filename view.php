<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post details</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $sql = "select p.*,s.languages as lang from post p,stat s where p.stat_id = s.id AND s.id = $id";
        $query = mysqli_query($con, $sql);
    } else {
        header("location:display.php");
        exit;
    }
    while ($q = mysqli_fetch_array($query)) { ?>
        <h2>Post-id := <?php echo $q['id'] ?></h2>
        <h2>Post-name := <?php echo $q['name'] ?></h2>
        <h2>Post-Language := <?php echo $q['lang'] ?></h2>

    <?php }
    $id++
    ?>
</body>

</html>