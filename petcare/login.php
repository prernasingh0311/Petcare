<?php      
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        $servername="localhost";
        $username="id17167800_petcare_user";
        $password="{on%b<Bn2JiTZ]P%";
        $database="id17167800_petcare";      
        
        $conn = @mysqli_connect($servername, $username, $password, $database);
        if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else {
            $sql= "SELECT * FROM `register` WHERE `email` = '{$email}'";
            $result = mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num == 0){
                echo '<script>alert("User Not Found ! Please Register Yourself First")</script>';
            }
            else{
                $row = mysqli_fetch_assoc($result);
                if ($pass == $row['pass']){
                    // echo "<h1>Logged in successfully</h1>";
                    header('location:after_login.php');
                }
                else{
                    echo '<script>alert("Password Is Incorrect !")</script>';
                }
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/login.css" type="text/css" rel="stylesheet">

</head>
<body>
    <div>
        <nav class="navbar">
            <ul>
                <li>
                    <a href="index.php">
                    HOME</a>
                </li>
                <li>
                    <a href="HTML/about.html">ABOUT US</a>
                </li>
                <li>
                  <a href="contact.php">CONTACT US</a>
              </li>
              <li>
                  <a href="login.php">LOGIN</a>
              </li>
              <li>
                  <a href="sign.php">REGISTER</a>
              </li>
                <li> 
                    <a href="adopt.php">ADOPT</a>
                </li>
            </ul>
        </nav>
    </div>
  
    <form autocomplete="on" method="POST" action="login.php">
        <div class="container">
          <div class="box">
            <div id="login">
              <center><img src="images/logo.jpeg"></center>
            </div>
            <br><br><br><br><br>
            <div class="button">
              <center><input type="email" placeholder="  E-mail  " id="mail" name="email" required></center><br>
              <center><input type="password" placeholder="  Password  " name="pass" required></center><br>
            </div>
            <br>
            <div>
                <center><button type="submit" class="submit">Submit</button></center>
            </div>
          </div>                        
        </div>
    </form>
</body>
</html>