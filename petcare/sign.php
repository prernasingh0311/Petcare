<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="css/sign_log.css" type="text/css" rel="stylesheet">
    
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
   <form autocomplete="off" method="POST" action="index.php">
        <div class="box">   
            <div id="Register">
                <img src="images/logo.jpeg">
                </div>
                <div class="button">
                  <input type="text" placeholder="  First Name  " name="fname" required><br><br>
                  <input type="text" placeholder="  Last Name  " name="lname" required><br><br>
                  <input type="email" placeholder="   E-Mail  " name="email" required><br><br>
                  <input type="password" placeholder="  Password  "name="pass" required><br><br>
                  <input type="text" placeholder=" Phone No " name="phone" required width=50px><br>  
                </div>
                <div>
                    <button type="submit" class="submit"><br>Submit
                </div>          
            </div>
            </form>
</body>
</html>
