<?php
$conn = mysqli_connect('localhost','root','','new') or die('connection failed');
if(!empty($_SESSION["id"])){
  header("Location: home.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE name = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

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
  /*  border: none;
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
    <h2 align="center">Welcome Back!</h2>
    <form class="" action="" method="post" autocomplete="off">
      
      <p><input placeholder="enter your email" type="email" name="email" id = "email" required value=""> <br></p>
     
     <p> <input placeholder="enter your password" type="password" name="password" id = "password" required value=""> <br></p>

     <p>don't have an account? <a href="register.php">register new</a></p>
     <br>
     <p> <input class="button" type="submit" name="submit" value="Login"></p>
    </form>
    
    </div>

    
    
  </body>
</html>
