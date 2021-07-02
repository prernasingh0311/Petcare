
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "id17167800_petcare_user";
      $password = "{on%b<Bn2JiTZ]P%";
      $database = "id17167800_petcare";

      // Create a connection
      $conn = @mysqli_connect($servername, $username, $password, $database);
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        $sql = "INSERT INTO `register` (`fname`, `lname`, `email`, `pass`, `phone`) VALUES ('$fname', '$lname', '$email', '$pass', '$phone')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo '<script>alert("Registered Successfully!")</script>';
        } 
        else {
            echo '<script>alert("Server Down... Please Try Again Later!")</script>';
        }
        
      }

    }

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet care</title>
    <link href="css/dog.css" rel="stylesheet">
</head>
<body>
    <div class="navbar">

            <ul>
                <li>

                        <img src="images/logo.jpeg" id="nav"></a>
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
                    <a href="adopt.php"> ADOPT</a>
                </li>
            </ul>
        
    </div>
    <div class="top">
        
       <img src="https://images.pexels.com/photos/838409/pexels-photo-838409.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
         
       <h1>
                <font color="black"><b><i>YOU LEAVE EM! WE LOVE EM!</i></b> </font>
            </h1>
<br><br>
        </div>
    <div id="friend">
        <h1> <b>Best friends are the one's with paws... </b></h1><br><br>
        <div class="paw">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfU0BJaCbHIzpYoeEQ7HTF4fWqpeAoWIfBYg&usqp=CAU" id="paw">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfU0BJaCbHIzpYoeEQ7HTF4fWqpeAoWIfBYg&usqp=CAU">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfU0BJaCbHIzpYoeEQ7HTF4fWqpeAoWIfBYg&usqp=CAU">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfU0BJaCbHIzpYoeEQ7HTF4fWqpeAoWIfBYg&usqp=CAU">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfU0BJaCbHIzpYoeEQ7HTF4fWqpeAoWIfBYg&usqp=CAU">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfU0BJaCbHIzpYoeEQ7HTF4fWqpeAoWIfBYg&usqp=CAU">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfU0BJaCbHIzpYoeEQ7HTF4fWqpeAoWIfBYg&usqp=CAU">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfU0BJaCbHIzpYoeEQ7HTF4fWqpeAoWIfBYg&usqp=CAU">    
        </div>
        <br><br>
        </div>
        <div class="container">
            <div class="item" id="item-1">
                    <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTUsscMl1Ze65bBhBoUfq0jmeWY8k4DulRVPA&usqp=CAU"></center>
                    <h2><b><center>DONATE</b></h2></center>
                    <center><b><h3>Need to find your dog a new home!
                        Help is here
                    </b></center></h3>
                        <a href="../HTML/take_care.html"><center><div class="don">Read More</div></center></a>
            </div>
            <div class="item" id="item-2">
            <center><img src="https://23pxcp3u31lgiybw92v8rma1-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/puppy-600x417.jpg"></center>
            <h2><b><center>TAKE CARE</b></h2></center>
            <center><b><h3>
                PROVIDE <br>
                PROPER CARE
            </b></center></h3>
            <a href="../HTML/donate.html"><center><div class="don">Read More</div></center></a>
            </div>
                </div>
                <hr>
                <div class="mid">
                    <img src="../images/logo.jpeg" id="xyz">
                    Follow us on: &nbsp;&nbsp;&nbsp;
                    <a href="https://www.facebook.com/profile.php?id=100011448566057" target="blank"><img src="https://www.pymnts.com/wp-content/uploads/2018/02/facebookpublisher.jpg"></a>
                    &nbsp;&nbsp;
                    <a href="https://twitter.com/home" target="blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRQSF4Q_YxPhfEimdqajv0eX6q_GBiDiUkyaA&usqp=CAU"></a>
                </div>
                <hr>
                <div class="footer">
                    <div id="end">
                    <a href="../contact.php">CONTACT US</a><br><br>
                        Write us at:<br>
                        prernasingh.6november@gmail.com<br>
                        divy.j.140900@gmail.com
                    </div>
                </div>
</body>
</html>