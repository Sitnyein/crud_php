<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>delete page</h1>
    <?php
    require_once("./database.php");
    $id = $_GET['id'];
    $rql ="DELETE FROM task WHERE id='$id' ";
    $sql = mysqli_query($con,$rql);
    if($sql) {
        header("location:./listread.php");
    } else {echo "error delete";}

    ?>
</body>
</html>