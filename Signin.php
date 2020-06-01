<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sign in Page</title>
    <style>
      body{
          background-color: rgb(150, 150, 150);
      }
    
  </style>
  </head>
  <body>
      <div class="bg-dark">
          <h3 class="text-center text-white">Sign in Page</h3>
      </div>

      <div class="container my-5">
    <form action="signin_check.php" method="post" >
    
       
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="Name" class="form-control" id="exampleInputName"  name =username
            aria-describedby="emailHelp">
            
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name =email id="exampleInputEmail1" aria-describedby="emailHelp">
            
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name ='pass'class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit"id="button"class="btn btn-primary">Submit</button>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <!-- requred Javascript -->
   
  </body>
</html>