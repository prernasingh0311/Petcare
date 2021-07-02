<?php     
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $servername="localhost";
        $username="id17167800_petcare_user";
        $password="{on%b<Bn2JiTZ]P%";
        $database="id17167800_petcare";      
        
        $dogname = $_POST['Pname'];
        $breed = $_POST['breed'];
        
        $history = $_POST['Mhistory'];
        
        $no = $_POST['no'];
        $add = $_POST['Add'];
        
        
        $conn = @mysqli_connect($servername, $username, $password, $database);
        if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else {
        $sql = "INSERT INTO `donation` (`dogname`, `breed`, `medicalhistory`, `phone`, `address`) VALUES ('$dogname', '$breed', '$history', '$no', '$add')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo '<script>alert("You have registered successfully! We are grateful for your trust in us...")</script>';
            // header('location: HTML/about.html');
        }
        else {
            echo '<script>alert("Sorry, your request is denied!!)</script>';
        }
    }
    }
?>  




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Donation Form</title>
    <link rel="stylesheet" href="css/after_login.css">
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
            <l1>
                <a href="adopt.php">ADOPT</a>
            </l1>
          </ul>
      </nav>
    </div>
    <center><div class="container">
    </div></center>
    <br>
    <h2>Pet Donation Application</h2><br>
    <center><hr id="hr1"></center>
    <div class="container1" >
      <!--<div class="box" id="box1">-->
        <form action="after_login.php" method="POST"><br><br>
        <center><h3>Details</h3></center>
        <center><hr color="purple"></center><br>
          <p>Dog Name:</p>
          <input type="text" name="Pname" required>
          <p>Breed:</p>
          <input type="text" name="breed" required>
          <p>Medical History:</p>
          <input type="text" name="Mhistory" required>
      <!--</div>-->
      <!--<div class="box" id="box2">-->


          <p>Mobile No.</p>
          <input type="text" name="no" required>
          <p>Address:</p>
          <input type="text" name="Add" required><br><br><br>

          <center><button type = "submit">Submit</button></center><br><br><br><br><br>
        </form>
      <!--</div>-->
      
    </div><br>
  </body>
</html>