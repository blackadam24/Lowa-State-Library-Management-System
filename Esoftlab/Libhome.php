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
<div class="content">
 <h1>LOWA STATE LIBRARY</h1>
 <div class="quotes">
 <p><cite>
 " The Lowa State University Library strengthen and enhance the teaching, research and service of 
     the Lowa State University. The Lowa State Library promote intellectual growth and creativity by developing collections,
      facilitating access to information resources, teaching the effective use 
     of information resources and critical evaluation skills and offering research assistance. "</cite></p>
 
</div>
</div>
</div>
<style>

* {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
.quotes{
    margin-top:20%;
    margin-bottom:20%;
    width:85%;
    height:40%;
    box-sizing: border-box;
    margin-left:-8%;
    font-weight: bold;
    font-size: 20px;
    color:green;
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



.content h1 {
    font-size: 68px;
    font-weight: 200px;
    margin-left: -7%;
    color:red;
    
    
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