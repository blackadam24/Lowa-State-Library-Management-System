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
<!-------------header------------------->
<div class="heading">
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
 <li><a href="adminsign.php">Admin</a></li>

 </ul>
</nav>
</div>
<!------------login form--------------->
<div class="form1">
  <form method="post">
  <h1>User login</h1>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="passw" id="exampleInputPassword1">
  </div>
  <!------------submit button------------>
  <div class="btns2">
  <button type="submit" class="btn btn-primary" name="admin" id="admin">Admin login</button>
 <button type="submit" class="btn btn-warning" name="users" id="users">User login</button>
  <a href="#" class="link-primary">Forgot Password?</a>
  </div>
 
</form>

<!----------php opeartions------------->
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="lowastatenew";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(isset($_POST['admin'])){
    $email = $_POST['email'];
    $passw = $_POST['passw'];
    $query = "select * from Admin where Email='".$email."' and Passcode='".$passw."'";
    $result = mysqli_query($conn, $query);
    if ($result){
        while ($row = mysqli_fetch_array($result)){

        }
        if (mysqli_num_rows($result)>0){
            ?>
            <script>window.location.href="admin.php"</script>
        <?php
        }
        else{
           ?>
           <script>alert("Login unsuccessfull!!")</script>
           <?php
        }
    }

}
if(isset($_POST['users'])){
    $email = $_POST['email'];
    $passw = $_POST['passw'];
    $query = "select * from user where Email='".$email."' and Passcode='".$passw."'";
    $result = mysqli_query($conn, $query);
    if ($result){
        while ($row = mysqli_fetch_array($result)){

        }
        if (mysqli_num_rows($result)>0){
            ?>
            <script>window.location.href="user.php";</script>
        <?php
        }
        else{
           ?>
           <script>alert("Login unsuccessfull!!")</script>
           <?php
        }
    }

}

?>

<!---------------- style sheet ----------------->

</div>
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
.heading{
  position: fixed;
  top: 0;
  left:0;
  width: 100%;
  

}

nav {
    background: #0082e6;
    height: 80px;
    width: 100%;
   
}

#admin a {
    color: black;
    text-decoration: none;
}

footer {
  text-align: center;
  padding: 3px;
  padding-bottom: 18px;
  background-color: #0082e6;
  color: white;
  
}

footer p a{
  color: black;
}
label.logo {
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 80px;
    font-weight: bold;
    font-family: "Lucida Console","Courier New",monospace;
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

tr {
    margin-bottom: 10px;
}

tr .btns2 {
    margin: 10px;
}

#check {
    display: none;
}

.btns2 {
    margin-top: 10px;
}
.form1 {
    margin-top: 12%;
    margin-left: 28%;
    margin-bottom: 18%;
    height: 30%;
    width: 40%;
    z-index:2;
}


@media (max-width:925px) {
    label.logo {
        font-size: 16px;
        padding-left: 50px;
    }
    nav ul li a {
        font-size: 16px;
    }
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
        color:#0082e6;
    }
    
    #check:checked~ul {
        left: 0;
    }
    .btns2 {
        display: flex;
        margin-top: 10px;
        flex-direction: column;
    }
    #admin {
        margin-top: 10px;
    }
    #users {
        margin-top: 10px;
        margin-bottom: 20px;
    }
    footer {
      margin-top: 60%;
      padding:4px;
      margin-top:81%;
    }
    .form1{
      margin-top: 28%;
    }
    label.logo{
      font-size: 15px;
      font-weight: bold;
      font-family: "Lucida Console", "Courier New", monospace;
    }
}


ul li a {
    list-style: none;
    text-decoration: none;
}

.link-primary {
    display: flex;
    flex-direction: column;
    margin-top: 5px;
    width:25%;
}

</style>

<!--- ----- footer ----- ----->
<div class="foot">
<footer>
  <p>&copy Apex Design Works<br>
  <a href="mailto:Apex@example.com">mailto: Apex@gmail.com</a></p>
</footer>
</div>
</body>
</html>














































