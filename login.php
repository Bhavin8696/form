
<?php require_once "./connection.php";

if(isset($_SESSION['sanjna'])){
  header("location:dashboard.php");
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    form{
        box-shadow: 2px 6px 100px black;
        background-color:black;
    }
    
    img{
        border-radius: 100px;
        height: 120px;
        width: 120px;
    }
    body{
      margin-top: 100PX;
    }
    
</style>
</head>
<body class="bg-light text-light">
    <center>
    <form class="  was-validated col-md-4 border border-light" action="loginuser.php" method="POST">
        <img src="https://thumbs.dreamstime.com/b/login-icon-button-vector-illustration-isolated-white-background-127000355.jpg" alt="" id="profile-pic">
         <br><br>
  
        <div  class="col-md-6">
        <label class="form-label">USERNAME:</label>
        <input type="text"required="required" class="form-control" name="username" placeholder="USERNAME">
      </div><br><br>
      <div class="col-md-6">
      <label class="form-label">PASSWORD:</label>
	<div class="input-group col-md-4">
	  <input type="password" class="form-control" id="password"name="pass"placeholder="PASSWORD" aria-label="Password" aria-describedby="password-toggle">
	  <button class="btn btn-outline-light" required="required"type="button" id="password-toggle" onclick="togglePasswordVisibility()">
		<i class="bi bi-eye-slash"></i>
		  </button>
      </div>
      </div><br><br>
     <div class="d-grid gap-2 d-md-block col-md-4">
     <button class="btn btn-outline-light" name="submit" type="submit">LOGIN</button>
    </div><br><br>
     <b> <a href="form.php">NEW REGISTATION</a></b>
</form>
</center>
<script>
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById("password");
      const passwordToggle = document.getElementById("password-toggle");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.innerHTML = '<i class="bi bi-eye"></i>';
      } else {
        passwordInput.type = "password";
        passwordToggle.innerHTML = '<i class="bi bi-eye-slash"></i>';
      }
    }
  </script>
    
</body>
</html>