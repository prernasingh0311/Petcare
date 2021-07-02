<?php
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    $no=$_POST['no'];
    
    $servername="localhost";
    $username="id17167800_petcare_user";
    $password="{on%b<Bn2JiTZ]P%";
    $database="id17167800_petcare";
    
    $conn = @mysqli_connect($servername, $username, $password, $database);
    if (!$conn){
     die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{ 
     $sql="INSERT INTO `contact` (`s.no`, `name`, `email`, `message`, `phone`) VALUES (NULL, '$name', '$email', '$msg', '$no')";
     $result = mysqli_query($conn, $sql);
     if($result) {
         echo '<script>alert("We will get back to you... Thankyou!")</script>';
     }
     else {
         echo '<script>alert("Sorry for incovinience!")</script>';
     }
    }
    
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>contact us</title>
    <link rel="stylesheet" href="css/contact.css"></link>
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
    <br><br><br><br>
    <div class="conatiner1">
      <div class="item1">
        <p id="ques" class="top">Got a question ?</p>
        <h1 id="contact" class="top">Contact Petcare</h1>
        <p id="help" class="top">We are here to answer any question you might have.<br>We look forward to hearing from you :-)</p>
      </div>
    </div>
    <div class="container">
      <div class="item" id="form">
        <form autocomplete="off" action="contact.php" method="POST">
          <h2 id="boxtop">Contact Us</h2>
          <br><br>
          Name:<br> 
          <input type="text" name="name" placeholder="eg- Name"><br><br>
          Email:<br> 
          <input type="email" name="email" placeholder="eg- abc@xyz.com"><br><br>
          Message:<br> 
          <input type="text" name="msg" id="msg"><br><br>
          Mobile No.:<br> 
          <input type="text" name="no" id="no" placeholder="10-digit-number"><br><br><br>
          <button id="btn" type="submit">Submit</button>
        </form>
      </div>
      <div class="item" id="image">
        <h2 id="home">WE WANT HOME!</h2>
        <hr>
        <img src="https://images.unsplash.com/photo-1561037404-61cd46aa615b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" height="350px" width="450px" alt="dogs">
      </div>
    </div>
    <br><br><br><br>
    <div class="container2">
      <div class="box" id="phn">
       <p>Call us at:</p>
       <p>+91(ind)-8888888888</p>
       <p>+91(ind)-9999999999</p>
      </div>
      <div class="box" id="post">
        <p>Post us :</p>
        <p>Indian Institue of Information Technology-Allahabad</p>
      </div>
    </div>
  </body>
</html>