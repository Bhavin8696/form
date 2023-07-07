  <?php require_once "./connection.php";
   
   if(isset($_POST['submit'])){
    
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $query="SELECT * FROM `student` WHERE  `username`='$username' AND `pass`='$pass' ";
    $result=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        $_SESSION['bhavin']=$data['username'];
        $_SESSION['sanjna']=$data['sname'];
        ?>
        <script>
    alert("Login Success");
    window.location.href="dashboard.php";
</script>
        <?php

    }else{
        echo "Invalid Username or Password!";
        
    }

   }

?>