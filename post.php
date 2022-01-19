<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>

<body>
    <form method="post">
        <label for="category">Category</label>
        <select name="stat_id">
            <?php
            $sql = "select * from stat";
            $query = mysqli_query($con, $sql);
            foreach ($query as $q) { ?>
                <option value="<?php echo $q['id'] ?>"><?php echo $q['languages'] ?></option>
            <?php } ?>
        </select>
        <br><br>
        <label for="Name">Name</label>
        <input type="text" name="name">
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
<?php
if (isset($_POST['submit'])) {
    $stat_id = $_POST['stat_id'];
    $name = $_POST['name'];
    $sql = "INSERT INTO post (stat_id,name) values($stat_id,'$name')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "Data inserted";
    } else {
        echo "data failde";
    }
}
?>

</html>