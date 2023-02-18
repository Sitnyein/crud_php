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
   <h1>update page</h1>

    <?php 
    require_once("./database.php");
    $id  =  $_GET['id'];
    $red = "SELECT * FROM task where id=$id";
    $read = mysqli_query($con,$red);
    $rad= mysqli_fetch_assoc($read);

    
    if(isset($_POST['crbtn'])) {
      $name = $_POST['uname'];
      $town = $_POST['utown'];
      $ddid= $_POST['updateid'];
      if($name == null || $town == null) {
        echo "need to fill";
      }else { 
        
        $raw = "UPDATE task SET name='$name',town='$town'  WHERE id=$ddid ";
        if(mysqli_query($con,$raw)) {
          header("location:./listread.php");
        } else { echo "error";}
      }
    }
    ?>


   
<form class="row g-3 mt-5" method="post">
  <input type="hidden" name="updateid" value="<?php echo $rad['id']; ?>">
  <div class="col-md-3 offset-1 mt-5">
    <label for="inputname" class="form-label">Name upload</label>
    <input type="text" name="uname" value="<?php echo $rad['name'] ;?>" class="form-control" id="inputname">
  </div>
  <div class="col-md-3 offset-1 mt-5">
    <label for="inputhome" class="form-label">Town</label>
    <input type="text" name="utown" value="<?php echo $rad['town'] ;?>" class="form-control" id="inputhome">
  </div>

  <div class="col-5 offset-6">
    <button type="submit" class="btn btn-dark text-white" name="crbtn">Create</button>
  </div>
</form>



</body>
</html>