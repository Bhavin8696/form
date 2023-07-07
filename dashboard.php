<?php require_once "./connection.php";


if(!isset($_SESSION['sanjna'])){
     header("location:login.php");


}
echo"welcom" .$_SESSION['sanjna'];
?>
  <form action="logout.php">
    <br><br>
    <button type="submit">LOG OUT</button>
  </form>