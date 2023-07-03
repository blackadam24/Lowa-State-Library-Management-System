

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

<div class="userpnl">
  <lbl>Admin panel</lbl>
</div>

<!-------- edit book form---------------->
<div class="adding-form">
<form class="book-form" method="post">
<label class="form-label">Add Book Details</label> 

<div class="mb-3">
    <input type="text" placeholder="Book Name" name="bookname" class="form-control" >
  </div>
  <div class="mb-3">
    <input type="text" placeholder="Author" name="Author" class="form-control" >
  </div>
  <div class="mb-3">
    <input type="text" placeholder="Category" name="Category" class="form-control" >
  </div>
  
  <div class="mb-3">
    <input type="text" placeholder="Quantity" class="form-control" name="Quantity" >
  </div>
  <button type="submit" class="btn btn-warning" id="addbook" name="addbook" >Add book</button>
  <button type="submit" class="btn btn-success" id="loadbook" name="loadbook">Load book details</button>
</form>
</div>


<div class="edit-form">

<form class="book-form2" method="post">
<label class="form-label">Edit Book Details</label> 
<div class="mb-3">
    <input type="text" placeholder="Book ID" name="bookid" class="form-control">
  </div>
<div class="mb-3">
    <input type="text" placeholder="Book Name" name="bookname" class="form-control" >
  </div>
  <div class="mb-3">
    <input type="text" placeholder="Author" name="Author" class="form-control" >
  </div>
  <div class="mb-3">
    <input type="text" placeholder="Category" name="Category" class="form-control" >
  </div>
  
  <div class="mb-3">
    <input type="text" placeholder="Quantity" class="form-control" name="Quantity" >
  </div>
 
  <button type="submit" class="btn btn-success" id="upbook" name="upbook">Update book</button>
  <button type="submit" class="btn btn-danger" id="delbook" name="delbook">Delete book</button>
  <button type="submit" class="btn btn-warning" id="searchbook" name="searchbook">Search book</button>
  
</form>
</div>

<div class="user-form">

<form class="book-form3" method="post">
<label class="form-label">Edit User Details</label> 
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
 
  <button type="submit" class="btn btn-success" id="upuser" name="upuser">Update User</button>
  <button type="submit" class="btn btn-danger" id="deluser" name="deluser">Delete User</button>
  <button type="submit" class="btn btn-warning" id="searchuser" name="searchuser">Search User</button>
  <button type="submit" class="btn btn-primary" id="loaduser" name="loaduser">Load User details</button>
</form>
</div>

















<!--------php operations------>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="lowastatenew";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if($conn->connect_error){
        die("connection error: " . $conn->connect_error);
    }

/**************** Edit book details *******************/
  /*table 1*/
    







if(isset($_POST['addbook'])){
        
    $bookname = $_POST['bookname'];
    $Author = $_POST['Author'];
    $Category = $_POST['Category'];
    $Quantity = $_POST['Quantity'];
    
    $querys = "INSERT INTO book(Book_name,Author,Category,Quantity) values ('$bookname','$Author','$Category','$Quantity')";
    $result4 = $conn->query($querys);
    $sql = "select * from book";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        ?>
        <script>alert("Book added successfully!!");</script>
        <?php
    echo "<table class='tbl1' border='1'><tr><th colspan='6'><h2>Book details<h2></th></h1></tr><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Category</th><th>Quantity</th></tr>";

    while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row['B_ID']."</td><td>".$row['Book_name']."</td><td>".$row['Author']."</td><td>".$row['Category']."</td><td>".$row['Quantity']."</td><tr>";
    }
    echo"<style>
    .tbl1{
        margin-top:-115%;
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

 


     

/*search book*/

if(isset($_POST['searchbook'])){
    $bookid = $_POST['bookid'];
    $query3 = "select * from book where B_ID='".$bookid."'";
    $result4 = $conn->query($query3);
    if($result4->num_rows>0){
        
        while($row = $result4->fetch_assoc()){
        echo "<div class='booksrc'>Book ID :" .$row['B_ID']."<br>Book name :".$row['Book_name']."<br>Author :".$row['Author']."<br>Category :".$row['Category']."<br>Quantity :".$row['Quantity']."</div>";
        
        
        }
        echo"<style>
        .booksrc{
            margin-top:-60%;
            margin-left:73%;
            width:50%;
        }
        </style>";
        echo"</table><br>";
    }
    else{
        echo "0 results";
    }

}









/*delete book*/



if(isset($_POST['delbook'])){
    $bookid = $_POST['bookid'];
    $top = "delete from book where B_ID='".$bookid."'";
    $conn->query($top);
    $query6 = "select * from book";
    $result11 = $conn->query($query6);
    if($result11->num_rows>0 ){
        ?>
        <script>alert("Book deleted successfully!!");</script>
        <?php
        echo "<table class='tbl1' border='1'><tr><th colspan='6'><h2>Book details<h2></th></h1></tr><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Category</th><th>Quantity</th></tr>";
    
        while($row = $result11->fetch_assoc()){
        echo "<tr><td>".$row['B_ID']."</td><td>".$row['Book_name']."</td><td>".$row['Author']."</td><td>".$row['Category']."</td><td>".$row['Quantity']."</td><tr>";
        }
        echo"<style>
        .tbl1{
            margin-top:-115%;
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
/*************Load Book details*********** */




if(isset($_POST['loadbook'])){
    $query6 = "select * from book";
    $result11 = $conn->query($query6);
    if($result11->num_rows>0 ){
        echo "<table class='tbl1' border='1'><tr><th colspan='6'><h2>Book details<h2></th></h1></tr><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Category</th><th>Quantity</th></tr>";

        while($row = $result11->fetch_assoc()){
        echo "<tr><td>".$row['B_ID']."</td><td>".$row['Book_name']."</td><td>".$row['Author']."</td><td>".$row['Category']."</td><td>".$row['Quantity']."</td><tr>";
        }
        echo"<style>
        .tbl1{
            margin-top:-115%;
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


/**update books****/

if(isset($_POST['upbook'])){
    $bookid = $_POST['bookid'];
    $bookname = $_POST['bookname'];
    $author = $_POST['Author'];
    $category = $_POST['Category'];
    $quantity = $_POST['Quantity'];
    $top = "update book set Book_name='".$bookname."',Author='".$author."',Category='".$category."',Quantity='".$quantity."' where B_ID='".$bookid."'";
    $conn->query($top);
    $query7 = "select * from book";
    $resultw = $conn->query($query7);
    if($resultw->num_rows>0 ){
        ?>
        <script>alert("book updated successfully!!");</script>
        <?php
        echo "<table class='tbl1' border='1'><tr><th colspan='6'><h2>Book details<h2></th></h1></tr><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Category</th><th>Quantity</th></tr>";
    
        while($row = $resultw->fetch_assoc()){
        echo "<tr><td>".$row['B_ID']."</td><td>".$row['Book_name']."</td><td>".$row['Author']."</td><td>".$row['Category']."</td><td>".$row['Quantity']."</td><tr>";
        }
        echo"<style>
        .tbl1{
            margin-top:-115%;
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










/******************************Edit user details**********************/




/***********Load user table**************** */





if(isset($_POST['loaduser'])){
    $queryy = "select * from user";
    $resultr = $conn->query($queryy);
    
    if($resultr->num_rows>0){
  
        echo "<table class='tbl2' border='1'><tr><th colspan='7'><h2>User details<h2></th></h1></tr><tr><th>NIC</th><th>Email</th><th>Passcode</th><th>Fname</th><th>Lname</th><th>Usertype</th><th>Mobile</th></tr>";
    
  
        while($row = $resultr->fetch_assoc()){
          echo "<tr><td>".$row['NIC']."</td><td>".$row['Email']."</td><td>".$row['Passcode']."</td><td>".$row['Fname']."</td><td>".$row['Lname']."</td><td>".$row['Usertype']."</td><td>".$row['Mobile']."</td><tr>";
        }
        echo"<style>
        .tbl2{
            margin-top:-28%;
                margin-bottom:10%;
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


/********************Delete user************* */




if(isset($_POST['deluser'])){
    $nic = $_POST['nic'];
    $max = "delete from user where NIC='".$nic."'";
    $conn->query($max);
    $quer = "select * from user";
    $ted = $conn->query($quer);

    if($ted->num_rows>0){
        ?>
        <script>alert("user deleted successfully!!");</script>
        <?php
            
    
        echo "<table class='tbl2' border='1'><tr><th colspan='7'><h2>User details<h2></th></h1></tr><tr><th>NIC</th><th>Email</th><th>Passcode</th><th>Fname</th><th>Lname</th><th>Usertype</th><th>Mobile</th></tr>";


        while($row = $ted->fetch_assoc()){
        echo "<tr><td>".$row['NIC']."</td><td>".$row['Email']."</td><td>".$row['Passcode']."</td><td>".$row['Fname']."</td><td>".$row['Lname']."</td><td>".$row['Usertype']."</td><td>".$row['Mobile']."</td><tr>";
        }
        echo"<style>
        .tbl2{
            margin-top:-28%;
                margin-bottom:10%;
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











    /***********search user***************** */

if(isset($_POST['searchuser'])){
        $nic = $_POST['nic'];
        $sqlm = "select * from user where NIC='".$nic."'";
    $resultt = $conn->query($sqlm);
    
    if($resultt->num_rows>0){
        
    
        while($row = $resultt->fetch_assoc()){
            echo "<div class='usersrc'>User ID :" .$row['NIC']."<br>Email :".$row['Email']."<br>Password :".$row['Passcode']."<br>First Name :".$row['Fname']."<br>Last Name :".$row['Lname']."<br>User Type :".$row['Usertype']."<br>Mobile :".$row['Mobile']."</div>";
        }
        echo"<style>
        .usersrc{
            margin-top:3%;
                margin-bottom:20%;
                margin-left:75%;
                width:50%;
        }
        </style>";
   
    }else{
        echo "0 results";
    }
    
}
    /*******************************update user************************* */


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
                margin-top:-28%;
                margin-bottom:20%;
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








/**************** Show rent details *******************/
/*table 3*/

$sql2 = "select * from rent";
$resultd = $conn->query($sql2);

if($resultd->num_rows>0){
    echo "<table class='tbl3' border='1'><tr><th colspan='7'><h2>Rent details<h2></th></h1></tr><tr><th>Book ID</th><th>Book Name</th><th>NIC</th><th>Rent_Date</th><th>Return_Date</th><th>Fine(Rs.)</th></tr>";

    while($rows = $resultd->fetch_assoc()){
    echo "<tr><td>".$rows['B_ID']."</td><td>".$rows['Book_name']."</td><td>".$rows['NIC']."</td><td>".$rows['Rent_Date']."</td><td>".$rows['Return_Date']."</td><td>".$rows['Fine']."</td><tr>";
    }
    echo"<style>
    .tbl3{
        margin-left:15%;
        margin-top:121%;
        width:57%;
    }
    </style>";
    echo"</table><br/>";
}else{
    echo "0 results";
}



$conn->close();

?>
<!---------------- style sheet ----------------->
<style>
* {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

#addbook{
    margin-left:35%;
}
#upbook{
    margin-left:15%;
}
#delbook{
    margin-top: -12%;
    margin-left:55%;
}
#detbook{
    margin-top: -11.5%;
    margin-left:29%;
}
#searchbook{
    margin-top:5%;
    margin-left:38%;
}
#loaduser{
    margin-top:-10%;
    margin-left:15%;
}
#loadbook{
    margin-top:2%;
    margin-left:27%;
}
.form-label{
    font-size:140%;
    font-weight:bold;
    margin-left:18%;
}
#searchuser{
    margin-top:2%;
    margin-left:50%;
}

.book-form{
    width:23%;
    height:50%;
    margin-top:7%;
    margin-left:73%;
    border:1px solid #495057;
    border-radius:7px;
    padding:8px;
}

.userpnl{
  margin-top:5%;
  margin-left:90%;
}

.userpnl lbl{
   width:30%;
   height:20%;
   font-size:28px;
   background:yellow;
}
.book-form2{
    width:22%;
    height:63%;
    margin-top:5%;
    margin-left:73%;
    border:1px solid #495057;
    border-radius:7px;
    padding:8px;
}
.book-form3{
    width:22%;
    height:80%;
    margin-top:27%;
    margin-left:73%;
    border:1px solid #495057;
    border-radius:7px;
    padding:8px;
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
.tbl3 h2{
    padding-left:36%;
    padding-bottom:4%;
    background:yellow;
    width:100%;
}

.lbl1{
    width:60%;
    height:5%;
    margin-top:3%;
    margin-left:18%;
    padding-top:3px;
    padding-left:25%;
    font-weight: bold;
    padding-bottom:3px;
    background:#0082e6;
    font-family:montserrat;
    margin-bottom: 4%;
    color:white;
}
body {
    font-family: montserrat;
}

nav {
    background: #0082e6;
    height: 80px;
    width: 100%;
    top: 0;
    left:0;
    position: fixed;
    
}

label.logo {
    color: white;
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
footer {
  margin-top:60%;
  text-align: center;
  padding: 3px;
  padding-bottom: 18px;
  background-color: #0082e6;
  color: white;
  
}

footer p a{
  color: black;
}

#check {
    display: none;
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
    margin-top: 18%;
    margin-left: 28%;
    margin-bottom: 18%;
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
}



</style>

<!----------footer---------->
<footer>
  <p>&copy Apex Design Works<br>
  <a href="mailto:Apex@gmail.com">mailto: Apex@gmail.com</a></p>
</footer>
</body>
</html>