<?php
$conn = mysqli_connect('localhost','root','','new') or die('connection failed');
if(!empty($_SESSION["id"])){
  header("Location: home.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE name = '$name' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('name or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO user VALUES('$name','$email','$password','$confirmpassword')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<html>
  <head>
    
    <title>Registration</title>
    <style >

    a{text-decoration: none;
      color: red;

    }
    #form{position: absolute;
          top: 20px;
          left: 550px;
          background: white;
          width: 300px;
          height: 550px;
          padding: 20px;
    }




    input{
    width: 100%;
    margin-bottom: 10px;
}

 input[type="text"], input[type="password"] ,input[type="email"]
{
    /*border: none;
    border-bottom: 1px solid #fff;*/
    background: transparent;
    outline: none;
    height: 40px;
    color: #673ab7;
    font-size: 16px;

}

input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #2196f3;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}


input[type="submit"]:hover
{
    cursor: pointer;
    background: #0097a7;
}
p{
    color: black;
    margin: 0;
    padding: 0;
    font-weight: bold;
}



    </style>
  </head>
  <body bgcolor="black">
    <div id="form">
    <h2 align="center">Create an Account</h2>
    <form class="" action="" method="post" autocomplete="off">
     
      <p><input placeholder="enter your name" type="text" name="name" id = "name" required value=""> <br></p>
      
      <p><input placeholder="enter your email" type="email" name="email" id = "email" required value=""> <br></p>
     
     <p> <input placeholder="enter your password" type="password" name="password" id = "password" required value=""> <br></p>
    
     <p> <input placeholder="confirm your password" type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br></p>

     <p>already have an account? <a href="login.php">login now</a></p>
     <br>
     <p> <input class="button" type="submit" name="submit" value="Register Now"></p>

    </form>
    
</div>

    
  </body>
</html>
