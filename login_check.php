<?php
$email =$_POST['email'];
$pass =$_POST['pass'];
// $email =$_GET['email'];
// $pass =$_GET['pass'];

// Create Your Database And Enter Details Like Root Name,Database Name And Password
$server="localhost";

// WRITE YOUR DATABASE USER ID ,PASSWORD AND DATABASE NAME
$user="";
$password="";
$db_name=""; 


$conn =mysqli_connect($server,$user,$password,$db_name);


if($conn){
    if ($email!=""and $pass!=""){
        $query="SELECT email from //HERE WRITE TABLE NAME where email ='$email' and pass='$pass'";
        $result=mysqli_query($conn,$query);
        $num =mysqli_num_rows($result);
            // echo $num;
            if($num==1){
                // echo $num;
                header('Location:Home_page.php');
            }


    }

}


?>
