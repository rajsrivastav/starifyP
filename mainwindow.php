<?php
session_start ();

if(isset($_SESSION['id'])){
	header('location:profile.php');
	exit();
}
include 'connection1.php';
$fetch = 'SELECT * FROM user WHERE id = "'.$_SESSION['id'].'"';
 $result = mysqli_query($conn, $fetch);
 $data = mysqli_fetch_assoc($result);
 $newname = strtoupper($data['fname'].' '.$data['lname']);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="welcomePage">
  <div class="text-center">
  <h2>WELCOME <?php echo $newname; ?></h2></div>
  
  <div> <a href="profile.php"><input type= "button" class="btn btn-primary" value="View Profile"></a></div>
  </div>
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>