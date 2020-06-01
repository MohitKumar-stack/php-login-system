<?php
$uname =$_POST['username'];
$email =$_POST['email'];
$pass =$_POST['pass'];

$server="localhost";

// WRITE BELOW YOUR DATABSE USERNAME ,PASSWORD AND DATABASE NAME FOR THIS PROJECT
$user="";
$password="";
$db_name=""; 
$conn =mysqli_connect($server,$user,$password,$db_name);


if($conn){
    if ($uname!=""and $email!=""and $pass!=""){

   
    $query="SELECT email from //HERE WRITE TABLE NAME  where email ='$email'";
    $result=mysqli_query($conn,$query);
        $num =mysqli_num_rows($result);
        // echo $num;
        if($num!=1){
        $query="INSERT INTO //HERE WRITE TABLE NAME VALUES ('$uname','$email','$pass')";

        mysqli_query($conn,$query);
        header('Location:Home_page.php');
        }
    }
        }
else{
    echo"connection not create";
}
?>
