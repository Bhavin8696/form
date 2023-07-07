<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    .box{
        display: none;
    }
    img{
        border-radius: 100px;
        height: 150px;
        width: 150px;
    }
    form{
        background-color: rgb(108, 155, 122);
    }
</style>
</head>
<body>
    <h1 class="bg-dark text-light text-center">STUDENT REGISTRTION FORM</h1>
    <center><b>
    <form  class=" was-validated text-light col-md-6" action="inser-form.php" method="post" enctype="multipart/form-data">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSLU5_eUUGBfxfxRd4IquPiEwLbt4E_6RYMw&usqp=CAU" alt="" id="profile-pic">
        <input class="box" type="file" name="photo" id="profile-file">  
        <script>
          let profile_pic=document.getElementById("profile-pic");
          let profile_file=document.getElementById("profile-file");
            profile_pic.addEventListener('click',()=>{
            profile_file.click()
          })
            profile_file.addEventListener("change",(event)=>{
            profile_pic.src=URL.createObjectURL(event.target.files[0]);
          });
        </script>
        <div class="col-md-8">
          <label for="uname" class="form-label">USERNAME:</label>
          <input type="text" class="form-control" id="uname" placeholder="USERNAME" name="username" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <!-- <div class="mb-3">
          <label for="pwd" class="form-label">PASSWORD:</label>
          <input type="password" class="form-control" id="pwd" placeholder="PASSWORD" name="" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div> -->

        <div class="col-md-8">
            <label for="pwd" class="form-label">PASSWORD:</label>
          <div class="input-group col-md-4">
            <input type="password" class="form-control" id="password"name="pass"placeholder="PASSWORD" aria-label="Password" aria-describedby="password-toggle">
            <button class="btn btn-outline-light" required="required"type="button" id="password-toggle" onclick="togglePasswordVisibility()">
              <i class="bi bi-eye-slash"></i>
             
                </button>
                <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            </div>
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
          <div class="col-md-8">
            <label class="form-label">COMFIRM PASSWORD:</label>
          <div class="input-group col-md-4">
            <input type="password" class="form-control" id="test"name="confirm"placeholder="COMFIRM PASSWORD" aria-label="Password" aria-describedby="test-toggle">
            <button class="btn btn-outline-light" required="required"type="button" id="password-toggle" onclick="box()">
              <i class="bi bi-eye-slash"></i>
                </button>
            </div>
            </div><div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
            <script>
          function box() {
            const passwordInput = document.getElementById("test");
            const passwordToggle = document.getElementById("test-toggle");
      
            if (passwordInput.type === "password") {
              passwordInput.type = "text";
              passwordToggle.innerHTML = '<i class="bi bi-eye"></i>';
            } else {
              passwordInput.type = "password";
              passwordToggle.innerHTML = '<i class="bi bi-eye-slash"></i>';
            }
          }
        </script>

          <div class="col-md-8">
            <label for="uname" class="form-label">STUDENT NAME:</label>
            <input type="text" class="form-control" id="uname" placeholder="STUDENT NAME" name="sname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="col-md-8">
            <label class="form-label">STUDENT BRITH DATE:</label>
            <input type="date" class="form-control" id="uname" placeholder="STUDENT BRITH DATE" name="bdate" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="col-md-8">
            <label class="form-label">STUDENT AGE:</label>
            <input type="number" class="form-control" id="uname" placeholder="STUDENT AGE" name="age" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div> 
          <div class="col-md-8">
            <label class="form-label">YOUR CITY:</label><br>
            <select class="select  col-md-12 btn btn-light" name="city" require>
                <option value="SURAT">SURAT</option>
                <option value="BHAVNGAR">BHAVNGAR</option>
                <option value="MUBAI">MUBAI</option>
                <option value="OTHER">OTHER</option>
              </select>
          </div> 
          <div class="col-md-8">
            <label for="inputAddress" class="form-label">ADDRESS</label>
            <input type="text"required="required" class="form-control"name="address" id="inputAddress" placeholder="ADDRESS">              
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="col-md-8">
            <label  class="form-label">FAVROVIT COLOR</label>
            <input type="color" class="form-control " id="exampleColorInput"name="color" value="#563d7c" title="Choose your color">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>  
          <div class="col-md-8">
            <label  class="form-label"> YOUR GENDER:</label><br>
            <div class="form-check form-check-inline ">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="MALE">
                <label class="form-check-label" for="inlineRadio1"><h5 class="text-light">MALE</h5></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  name="gender"id="inlineRadio2" value="FEMAIL">
                <label class="form-check-label" for="inlineRadio2"><h5 class="text-light">FEMAIL</h5></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  name="gender" id="inlineRadio2" value="OTHER">
                <label class="form-check-label" for="inlineRadio2"><h5 class="text-light">OTHER</h5></label>
              </div>
            <!-- <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> -->
          </div>  
          <div class="col-md-8">
            <label  class="form-label">FAVROVIT LANGUAGE</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"name="lang[]" value="ENGLISH">
                <label class="form-check-label" for="inlineCheckbox1"><h5 class="text-light">ENGLISH</h5></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"name="lang[]" value="HINDI">
                <label class="form-check-label" for="inlineCheckbox2"><h5 class="text-light">HINDI</h5></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"name="lang[]" value="OTHER">
                <label class="form-check-label" for="inlineCheckbox2"><h5 class="text-light">OTHER</h5></label>
              </div>            
            <!-- <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div> -->
          </div>    
        <button type="submit" name="submit" class="btn btn-outline-light">SUBMIT</button>
        <button type="reset" class="btn btn-outline-light">RESET</button>
        </form>
        <b> <a href="login.php">ALLREDY ACCCOUNT? CLICK HERE</a></b>
    </b></center>
</body>
</html>
