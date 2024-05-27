<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
      include  "connect.php";

      if(isset($_POST['submit'])){
        $name=$_POST ['name'];
        $email=$_POST ['email'];
        $moble=$_POST ['mobile'];
        $password=$_POST ['password'];
      
    
      $sqli ="INSERT INTO `crud`(`name`, `email`, `moble`, `password`) VALUES ('$name','$email','$moble','$password')";
      $result = mysqli_query($conn,$sqli);
      if($result){
        // echo "data successfully";
        header('location:display.php');
        echo '<script>alert("data succeefuly")</script>';
      }else{
        echo "not successflly";
      }
    }
    ?>
    
<div class="container my-5">
<form method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off" >
     </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile no</label>
    <input type="text" class="form-control" placeholder="enter your Mobile no" name="mobile" autocomplete="off" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" placeholder="enter your password" name="password">
   
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


</div>




</body>
</html>