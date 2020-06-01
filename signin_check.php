<?php
$uname =$_POST['username'];
$email =$_POST['email'];
$pass =$_POST['pass'];

// Create Your Database And Enter Details Like Root Name,Database Name And Password
$server="localhost";
$user="root";
$password="";
$db_name="xx"; 
$conn =mysqli_connect($server,$user,$password,$db_name);


if($conn){
    if ($uname!=""and $email!=""and $pass!=""){

   
    $query="SELECT email from click2 where email ='$email'";
    $result=mysqli_query($conn,$query);
        $num =mysqli_num_rows($result);
        // echo $num;
        if($num!=1){
        $query="INSERT INTO click2 VALUES ('$uname','$email','$pass')";

        mysqli_query($conn,$query);
        header('Location:Home_page.php');
        }
    }
        }
else{
    echo"connection not create";
}
?>
