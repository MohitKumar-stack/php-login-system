<?php
$email =$_POST['email'];
$pass =$_POST['pass'];
// $email =$_GET['email'];
// $pass =$_GET['pass'];

// Create Your Database And Enter Details Like Root Name,Database Name And Password
$server="localhost";
$user="root";
$password="";
$db_name="xx"; 
$conn =mysqli_connect($server,$user,$password,$db_name);


if($conn){
    if ($email!=""and $pass!=""){
        $query="SELECT email from click2 where email ='$email' and pass='$pass'";
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