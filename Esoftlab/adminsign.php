<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<!--------------navigation bar------------------->
<div class="header-bar">
<nav>
<input type="checkbox" id="check" >
<label for="check" class="checkbtn"> 
  <i class="fas fa-bars"></i>
</span></i>
</label>
 <label class="logo">LOWA STATE LIBRARY</label>
 <ul>
 <li><a  class="active" href="Libhome.php">Home</a></li>
 <li><a href="login.php">Login</a></li>
 <li><a href="signup.php">Signup</a></li>
 
 </ul>
</nav>
</div>
<!--------------signup form------------------>
<div class="form2" >
  <form  method="post">
  <h1>Admin signup</h1>
  <div class="mb-3">
    <label  class="form-label">National Identity Card No.</label>
    <input type="text" class="form-control" name="nic" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="passcode" id="password">
  </div>
  <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname" aria-describedby="emailHelp">
    
  </div>


  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control" name="mobile" aria-describedby="emailHelp">
    
  </div>
  
  
    <!------------------------submit buttons----------------->
    
  <button type="submit" class="btn btn-warning" name="admin" id="prof">Signup</button>
  
</form>
</div>

<!-------------------------php operations------------------>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="lowastatenew";





$conn = mysqli_connect($servername, $username, $password,$dbname);
if($conn->connect_error){
  die("connection error: " . $conn->connect_error);
}
if(isset($_POST['admin'])){
$nic = $_POST['nic'];
$email = $_POST['email'];
$passcode = $_POST['passcode'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$mobile = $_POST['mobile'];
$sql = "INSERT INTO Admin(NIC,Email,Passcode,Fname,Lname,Mobile) values ('$nic','$email','$passcode','$fname','$lname','$mobile')";
  if ($conn->query($sql)===TRUE){
    {
      ?>
    <script>alert("User added successfully!!");</script>
    <?php
    }
    
  }
  else{
    ?>
    <script>alert("connection error !");</script>
    <?php
  }
}

$conn->close();
  
?>











<!-----------------style sheet--------------->
<style type="text/css">
* {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

body {
    font-family: montserrat;
}

nav {
    background: #0082e6;
    height: 80px;
    width: 100%;
    position: fixed;
  top: 0;
  left:0;
  width: 100%;
    
}


label.logo {
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 80px;
    font-weight: bold;
    font-family: "Lucida Console","Courier New",monospace;
}
.header-bar {
  
  position: fixed;
  top: 0;
  left:0;
  width: 100%;
}
nav ul {
    float: right;
    margin-right: 20px;
}

nav ul li {
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}

nav ul li a {
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}

a.active,
a:hover {
    background: #1b9bff;
    transition: 0.9s;
}

.checkbtn {
    font-size: 30px;
    color: white;
    float: right;
    line-height: 80px;
    margin-right: 40px;
    margin-top: 25px;
    display: none;
}
footer p a{
  color: black;
}
footer {
  text-align: center;
  padding: 3px;
  padding-bottom: 18px;
  background-color: #0082e6;
  color: white;
  
}

#check {
    display: none;
}
#tamp{
  margin-bottom: 30px;
}

@media (max-width:925px) {
    label.logo {
        font-size: 15px;
        padding-left: 50px;
    }
    nav ul li a {
        font-size: 16px;
    }
}

.form2 {
    margin-top: 12%;
    margin-left: 28%;
    margin-bottom: 38%;
    height: 30%;
    width: 40%;
    
}

ul li a {
    list-style: none;
    text-decoration: none;
}

@media (max-width:858px) {
    .checkbtn {
        display: block;
    }
    ul {
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #2c3e50;
        top: 80px;
        left: -100%;
        text-align: center;
        transition: all 0.5s;
    }
    nav ul li {
        display: block;
        margin: 50px 0;
        line-height: 30px;
    }
    nav ul li a {
        font-size: 20px;
    }
    a:hover,
    a.active {
        background: none;
        color: #0082e6;
    }
    #check:checked~ul {
        left: 0;
    }
    .btns {
        display: flex;
        flex-direction: column;
    }
    #prof {
        margin-top: 2px;
        margin-bottom: 26x;
    }
    footer {
      padding:4px;
      margin-top:170%;
    }
    label.logo{
      font-size: 15px;
      font-weight: bold;
        font-family: "Lucida Console", "Courier New", monospace;
    }
    .form2 {
    margin-top: 34%;
    }
    #tamp{
     margin-top:8%;
    }
}
</style>
<!--------------------footer---------------------->
<div class="foot">
<footer>
  <p>&copy Apex Design Works<br>
  <a href="mailto:Apex@example.com">mailto: Apex@gmail.com</a></p>
</footer>
</div>
</body>
</html>