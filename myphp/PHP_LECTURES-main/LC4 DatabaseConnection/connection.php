<?php 
session_start();
// $_SESSION['myCode'] = "My Global Variable";
$con = mysqli_connect("localhost","root","","pr2_2024_08g"); //true

// Confirmation
// if($con){
//     echo "Connected";
// }


if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

   $query =  mysqli_query($con,"INSERT INTO registers(name,email,password)VALUES('$name','$email','$password')");


//    if($query){
//         echo "<script>
//             alert('Account Created Successfully')
//             location.assign('register.php')
//         </script>";
//    }

if($query){
    $_SESSION['success'] = "Account Created Successfully";
    header('location:register.php');
}

}



if($query){
    $_SESSION['success'] = "Account Created Successfully";
    header('location:register.php');
}



if(isset($_POST['login'])){
    $name = $_POST['gmail'];
    $password = sha1($_POST['password']);
//match data
   $query =  mysqli_query($con,"select * form registers where email='$email'and password='$password='");


   if(mysqli_num_rows($query) > 0){
             $convert=mysqli_fetch_assoc($query);
             //var_dump($convert);
             echo $convert['name'];
             echo $convert['email'];
             echo $convert['password'];
   }else{
  echo "<script>
             alert('email or password not correct')
             location.assign('login.php')
         </script>";
   }
}
?>