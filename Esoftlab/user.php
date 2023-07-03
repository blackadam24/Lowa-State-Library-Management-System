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
<!--navgation bar-->
<div class="heading">
<nav>
<!--list align-->
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
<div class="userpnl">
  <lbl>User panel</lbl>
</div>

<div class="user-form">

<form class="user-form3" method="post">
<label class="form-label">Update User Details</label> 
<div class="mb-3">
    <input type="text" placeholder="NIC" name="nic" class="form-control">
  </div>
<div class="mb-3">
    <input type="text" placeholder="Email" name="email" class="form-control" >
  </div>
  <div class="mb-3">
    <input type="text" placeholder="Password" name="passcode" class="form-control" >
  </div>
  <div class="mb-3">
    <input type="text" placeholder="First Name" name="fname" class="form-control" >
  </div>
  
  <div class="mb-3">
    <input type="text" placeholder="Last Name" class="form-control" name="lname" >
  </div>
  <div class="mb-3">
    <input type="text" placeholder="User type" class="form-control" name="utype" >
  </div>
  <div class="mb-3">
    <input type="text" placeholder="Mobile" class="form-control" name="mobile" >
  </div>

  <button type="submit" class="btn btn-primary" id="upuser" name="upuser">Update User details</button>
  
  
</form>

</div>


<div class="rent-form">

<form class="book-form5" method="post">
<label class="form-label">Borrow Book </label> 
<div class="mb-3">
    <input type="text" placeholder="Book ID" name="bid" class="form-control">
  </div>
<div class="mb-3">
    <input type="text" placeholder="Book Name" name="bname" class="form-control" >
  </div>
  <div class="mb-3">
    <input type="text" placeholder="NIC" name="nic1" class="form-control" >
  </div>
  
  <div class="mb-3">
    <input type="date" placeholder="Rent Date" name="rentdate" class="form-control" >
  </div>
  
 
  <button type="submit" class="btn btn-success" id="rentbk" name="rentbk">Submit</button>

</form>

</div>





<div class="issue-form">

<form class="book-form6" method="post">
<label class="form-label">Issue Book </label> 
<div class="mb-3">
    <input type="text" placeholder="Book ID" name="bid1" class="form-control">
  </div>
  <div class="mb-3">
    <input type="text" placeholder="NIC" name="nic2" class="form-control" >
  </div>
  
  <div class="mb-3">
    <input type="date" placeholder="Return Date" name="retundate" class="form-control" >
  </div>
  
 
  <button type="submit" class="btn btn-warning" id="returnbk" name="returnbk">Submit</button>

</form>

</div>












<?php
/*********************user operations**************** */
$servername="localhost";
$username="root";
$password="";
$dbname="lowastatenew";





$conn = mysqli_connect($servername, $username, $password,$dbname);
if($conn->connect_error){
  die("connection error: " . $conn->connect_error);
}

/*********Update user details ****************************/

if(isset($_POST['upuser'])){
    $nic8 = $_POST['nic'];
    $email = $_POST['email'];
    $passcoe = $_POST['passcode'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $utype = $_POST['utype'];
    $mobile = $_POST['mobile'];
    $pot = "update user set Email='".$email."',Passcode='".$passcoe."',Fname='".$fname."',Lname='".$lname."',Usertype='".$utype."',Mobile='".$mobile."'  where NIC='".$nic8."'";
    $conn->query($pot);
    $queryy = "select * from user";
    $resultr = $conn->query($queryy);
    
    if($resultr->num_rows>0){
      ?>
    <script>alert("user updated successfully!!");</script>
    <?php
        
        echo "<table class='tbl2' border='1'><tr><th colspan='7'><h2>User details<h2></th></h1></tr><tr><th>NIC</th><th>Email</th><th>Passcode</th><th>Fname</th><th>Lname</th><th>Usertype</th><th>Mobile</th></tr>";
    
  
        while($row = $resultr->fetch_assoc()){
          echo "<tr><td>".$row['NIC']."</td><td>".$row['Email']."</td><td>".$row['Passcode']."</td><td>".$row['Fname']."</td><td>".$row['Lname']."</td><td>".$row['Usertype']."</td><td>".$row['Mobile']."</td><tr>";
        }
        echo"<style>
        .tbl2{
            margin-top:-115%;
            margin-bottom:80%;
            margin-left:15%;
            width:50%;
        }
        </style>";
        echo"</table><br>";
    }
    else{
        echo "0 results";
    }
      
    
}




/**********Search Book details****************** */

$sql = "select * from book";
$result = $conn->query($sql);
if($result->num_rows>0){
    echo "<table class='tbl1' border='1'><tr><th colspan='6'><h2>Book details<h2></th></h1></tr><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Category</th><th>Quantity</th></tr>";

    while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row['B_ID']."</td><td>".$row['Book_name']."</td><td>".$row['Author']."</td><td>".$row['Category']."</td><td>".$row['Quantity']."</td><tr>";
    }
    echo"<style>
    .tbl1{
        margin-top:-78%;
        margin-bottom:45%;
        margin-left:10%;
        width:50%;
    }
    </style>";
    echo"</table><br>";
    }
else{
    echo "0 results";
    } 





/********************Rent details********************/

if(isset($_POST['rentbk'])){
  $bkid = $_POST['bid'];
  $bname = $_POST['bname'];
  $nic1 = $_POST['nic1'];
  $rentdate = $_POST['rentdate'];
  
  $sql = "INSERT INTO rent(B_ID,Book_name,NIC,Rent_Date) VALUES('$bkid','$bname','$nic1','$rentdate')";
    if ($conn->query($sql)===TRUE){
      {
        ?>
      <script>alert("Book purchased successfully!!");</script>
      <?php
      /*******************decrease quantity********************/
      $san = mysqli_query($conn,"SELECT  Quantity FROM book WHERE B_ID='".$bkid."'");
      while($roww = mysqli_fetch_array($san)){
      $york = $roww['Quantity'];
      $rat= $york - 1;
      $plan = "update book set Quantity ='".$rat."' where B_ID='".$bkid."'";
      $got = $conn->query($plan);
      }





      }
      
    }
    else{
      ?>
      <script>alert("connection error !");</script>
      <?php
    }
  }
  

/*********************Book Return details***********************/


if(isset($_POST['returnbk'])){
  $bid = $_POST['bid1'];
  $nic2 = $_POST['nic2'];
 
  $retundate = $_POST['retundate'];
  
    $top = "update rent set B_ID='".$bid."',Return_Date='".$retundate."' where NIC='".$nic2."'";
    
    if ($conn->query($top)===TRUE){
      {
        ?>
      <script>alert("Book returned successfully!!");</script>
      <?php
      /****************** Fine caculation *********************/
        $man =mysqli_query($conn,"SELECT  DATEDIFF(Return_Date,Rent_Date) FROM rent");
        while($row = mysqli_fetch_array($man)){
        $lol = $row['DATEDIFF(Return_Date,Rent_Date)'];
        $run = $lol* 500;
        $tor = "update rent set Fine='".$run."' where NIC='".$nic2."'";
        $ptr = $conn->query($tor);
        }

      /********************quantity increasing**************** */
        $lan = mysqli_query($conn,"SELECT  Quantity FROM book WHERE B_ID='".$bid."'");
        while($row = mysqli_fetch_array($lan)){
        $lot = $row['Quantity'];
        $rug = $lot + 1;
        $toss = "update book set Quantity ='".$rug."' where B_ID='".$bid."'";
        $pab  = $conn->query($toss);
        }
        
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











<style>

* {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
.quotes{
    margin-bottom:20%;
    width:30%;
    height:40%;
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
.userpnl{
  margin-top:5%;
  margin-left:90%;
}

.userpnl lbl{
   width:30%;
   height:20%;
   font-size:28px;
   background:blueviolet;
}


.tbl1 h2{
    padding-left:36%;
    padding-bottom:4%;
    background:#1b9bff;
    width:100%;
}
.tbl2 h2{
    padding-left:36%;
    padding-bottom:4%;
    background:green;
    width:100%;
}

label.logo {
    color: white;
    font-family: "Lucida Console", "Courier New", monospace;
    font-size: 35px;
    line-height: 80px;
    padding: 0 80px;
    font-weight: bold;
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
.user-form3{
    width:30%;
    height:71%;
    margin-top:8%;
    margin-bottom:6%;
    margin-left:37%;
    border:1px solid #495057;
    border-radius:7px;
    padding:8px;
}
.book-form5{
    width:22%;
    height:55%;
    margin-top:5%;
    margin-bottom:6%;
    margin-left:73%;
    border:1px solid #495057;
    border-radius:7px;
    padding:8px;
}

.book-form6{
    
    width:22%;
    height:45%;
    margin-top:2%;
    margin-bottom:25%;
    margin-left:73%;
    border:1px solid #495057;
    border-radius:7px;
    padding:8px;
}

.form-label{
    font-size:140%;
    font-weight:bold;
    margin-left:18%;
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

.content {
    margin-top: 13%;
    margin-left: 30%;
    margin-bottom: 18%;
    height: 30%;
    width: 60%;
}

.content p {
    font-size: 100%;
    font-weight: 200px;
    margin-top: 5%;
}

.content h1 {
    font-size: 50px;
    font-weight: 200px;
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
        color: #0082e6;
    }
    #check:checked~ul {
        left: 0;
    }
    .content h1 {
        font-size: 15px;
    }
    label.logo {
        font-weight: bold;
        font-family: "Lucida Console", "Courier New", monospace;
        font-size: 15px;
    }
    footer {
      padding:4px;
      margin-top:170%;
    }
    .content{
        margin-top:30%;
    }
    .content h1 {
    font-size: 120%;
    font-weight: bold;
    }
    .quotes{
    margin-bottom:20%;
    width:35%;
    height:15%;
    box-sizing: border-box;
    font-size:70%;
}
}

ul li a {
    list-style: none;
    text-decoration: none;
}
</style>

<!----------footer---------->
<footer>
  <p>&copy Apex Design Works<br>
  <a href="mailto:Apex@gmail.com">mailto: Apex@gmail.com</a></p>
</footer>
</body>
</html>