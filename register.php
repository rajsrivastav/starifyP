
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  
  <body>
  <?php 
  if (isset($_GET['error'])){
  ?>
  <p style="color: red;"><?php echo $_GET['error']; ?></p>
  <?php } ?>
<form class="form col-md-6 mx-5" method="post" action= "save.php" enctype="multipart/form-data">
First Name: <input type= "text" class="form-control" name="fname"><br>
Last Name: <input type= "text" class="form-control" name="lname"><br>
Email: <input type="email" class="form-control" name="email"><br>
Password: <input type="password" class="form-control" name="password"><br>
Phone Number: <input type="text" class="form-control" name="phone" max="10"></br>
<input type="submit" class="btn btn-primary" name="register">
 </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>