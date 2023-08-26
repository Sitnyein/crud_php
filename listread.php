<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<h3 class="mt-3">  <a href="./create.php">Create</a></h3>
    <table class="table  mt-5 ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Town</th>
      <th scope="col">Created_at</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php 
   require_once("./database.php");
   $sql = "SELECT * FROM task";
   $query = mysqli_query($con,$sql);
   while($row = mysqli_fetch_assoc($query)) {
      echo " <tr>
      
      <td>{$row['id']}</td>
      <td>{$row['name']}</td>
      <td>{$row['town']}</td>
      <td> {$row['creat-at']} </td>
      <td>
          <a href='./update.php?id={$row['id']}'>update</a> |
          <a href='./delete.php?id={$row['id']}'>delete</a>
      </td>
    </tr>
      ";
 }
   
   ?>
  </tbody>
</table>
</body>
</html>
