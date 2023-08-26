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
 <h3 class="mt-3"> <a href="./listread.php"> List read</a></h3>

<form class="row g-3 mt-5" method="post">
  <div class="col-md-3 offset-1 mt-5">
    <label for="inputname" class="form-label">Name upload</label>
    <input type="text" name="uname" class="form-control" id="inputname">
  </div>
  <div class="col-md-3 offset-1 mt-5">
    <label for="inputhome" class="form-label">Town</label>
    <input type="text" name="utown" class="form-control" id="inputhome">
  </div>
  <div class="col-5 offset-6">
    <button type="submit" class="btn btn-dark text-white" name="crbtn">Create</button>
  </div>
</form>
    
<?php 
require_once("./database.php");
if(isset($_POST['crbtn'])) {
  $name = $_POST['uname'];
  $town = $_POST['utown'];
 
  if($name == null || $town == null ){
       echo "you need to fill";
  }
  else { 
    $sql ="INSERT INTO task (name,town) VALUES ('$name','$town') ";
if(mysqli_query($con,$sql)) {
    echo "success";
} else { echo "error";}

  }
}



?>
</body>
</html>