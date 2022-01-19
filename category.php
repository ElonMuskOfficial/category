<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>

<body>
    <form method="post">
        <label for="html">HTML</label>
        <input type="radio" id="1" name="language" value="html">
        <label for="php">PHP</label>
        <input type="radio" id="2" name="language" value="php">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
<?php
if (isset($_POST['submit'])) {
    $rb = $_POST['language'];
    $sql = "INSERT INTO stat (languages) values('$rb')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "Data inserted";
    } else {
        echo "data failde";
    }
}
?>

</html>