<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
</head>

<body>
    <table border="2px">
        <thead>
            <tr>
                <th>id</th>
                <th>stat_id</th>
                <th>name</th>
                <th>language</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select p.*,s.languages as lang from post p,stat s where p.stat_id = s.id";
            $query = mysqli_query($con, $sql);
            foreach ($query as $q) {
            ?>
                <tr>
                    <td><?php echo $q['id'] ?></td>
                    <td><?php echo $q['stat_id'] ?></td>
                    <td><?php echo $q['name'] ?></td>
                    <td><?php echo $q['lang'] ?></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</body>

</html>