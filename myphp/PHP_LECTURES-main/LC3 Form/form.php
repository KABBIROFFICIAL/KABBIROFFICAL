<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

 <div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <form  method="POST">
                <input class="form-control mb-3" type="text" name="name" placeholder="Enter Your Name" required>
                <input class="form-control mb-3" type="email" name="email" placeholder="Enter Your Email" required>
                <input class="form-control mb-3" type="password" name="password" placeholder="Enter Your Password" required>
                <label for="">Select Gender:</label>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female <br>

                <select name="city" id="">
                    <option value="">SELECT CITY</option>
                    <option value="Karachi">KARACHI</option>
                    <option value="Hyderabad">HYDERABAD</option>
                </select><br>

                <label for="">Select Date Of Birth</label><br>
                <input type="date" name="dob">
                
                <button class="btn btn-primary" type="submit" name="register">Register</button>
                <!-- <button class="btn btn-primary" type="submit" name="login">Login</button> -->
            </form>
        </div>
    </div>
 </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>




<?php 


$role = "uSER";

// if(isset($role)){
//     echo "<script>
//         alert('User Variable Set')
//     </script>";
// }


if(isset($_POST['register'])){
    echo $_POST['name'];
    echo $_POST['email'];
    echo $_POST['password'];
    echo $_POST['gender'];
    echo $_POST['city'];
    echo $_POST['dob'];
    // var_dump($_POST);
}

if(isset($_POST['login'])){
    echo "Login Button Working";
}



?>