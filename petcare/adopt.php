<?php
    $servername="localhost";
   $username="id17167800_petcare_user";
   $password="{on%b<Bn2JiTZ]P%";
   $database="id17167800_petcare";
   $conn = @mysqli_connect($servername, $username, $password, $database);
   if ($_SERVER['REQUEST_METHOD']=='POST'){
    $dogtag=$_POST['dogtag'];
    $sql= "DELETE FROM `donation` WHERE `s.no` = '{$dogtag}' ";
    $result= mysqli_query($conn,$sql);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet care</title>

    <link href="css/dog.css" rel="stylesheet">
    <style>
    table {
    border-collapse: collapse;
    width: 100%;
    color: #800080;
    font-family: monospace;
    font-size: 25px;
    text-align: center;
    }
    th {
    background-color: #800080;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    form label{
        font-family:cursive;
        font-size:1.7vw;
    }
    form input{
        height: 1.7vw;
    }
    .btn{
        color:white;
        padding: 0.5vw;
        cursor:pointer;
        border-radius:8px;
        background-color:#800080; 
    }
    .btn:hover{
        background-color:#f2f2f2;
        color:black;
    }
    
    </style>
    </head>
<body>
    <div class="navbar">

            <ul>
                <li>

                        <img src="images/logo.jpeg" id="nav"></a>
                </li>
                <li>
                    <a href="index.php">HOME</a>
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
    </div>
        <br><br><br><br><br>
<!--<table>-->
<!--<tr>-->
<!--<th>Dog-Tag</th>-->
<!--<th>Name</th>-->
<!--<th>Breed</th>-->
<!--<th>Medical History</th>-->
<!--</tr>-->

<center><form action="adopt.php" method="POST">
    <label>Enter dog-tag you want to adopt :</label><br><br><br>
    <input type="text" style="width: 19vw;" name="dogtag"><br><br><br>
    <button class="btn btn-primary" style="width:7vw" type="submit"><strong>Adopt</strong></button><br><br><br><br><br>
    <!--<button type="submit">Adopt</button>-->
</form></center>
</body>
</html>
<?php

    
   echo "<table><tr><th>Dog-Tag</th><th>Name</th><th>Breed</th><th>Medical History</th></tr>";
   

//   if (!$conn){
//      die("Sorry we failed to connect: ". mysqli_connect_error());
//   }
//   else{
     $sql = "SELECT `s.no`,`dogname`, `breed`, `medicalhistory` FROM `donation`";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
       echo "<tr><td>" . $row["s.no"] . "</td><td>" . $row["dogname"]. "</td><td>" . $row["breed"] . "</td><td>" . $row["medicalhistory"]. "</td></tr>";
      }
     echo "</table>";
     } 
     else { 
        echo "0 results"; 
     }    
//   }
   
?>
