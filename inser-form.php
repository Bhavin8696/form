<?php require_once "./connection.php";
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $confirm=$_POST['confirm'];
    $sname=$_POST['sname'];
    $bdate=$_POST['bdate'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $color=$_POST['color'];
    $gender=$_POST['gender'];
    $lang=$_POST['lang'];
    $lang1= "";
    foreach($lang as $row){
        $lang1 .=$row . ",";   
    }
    if($pass==$confirm){
    if($photo=$_FILES['photo']){
        $name=time().$_FILES['photo']['name'];
        $tmp_name=$_FILES['photo']['tmp_name'];
        $uplode=move_uploaded_file($tmp_name,"./folder".$name);
        if($uplode){
       
            $query="INSERT INTO `student`(`photo`,`username`,`pass`,`confirm`,`sname`,`bdate`,`age`,`city`,`address`,`color`,`gender`,`lang`)
            VALUES('$name','$username','$pass','$confirm','$sname','$bdate','$age','$city','$address','$color','$gender','$lang1')";
         $result=mysqli_query($conn,$query);
         if($result){
            ?>
            <script>
                alert("insert succes");
                window.location.href="login.php";
            </script>
            <?php
         }else{
            echo" faild";
         }

    }

    }
}else{
    ?>
    <script>
        alert("password dose not mathc");
    </script>
    <?php
}
}
?>