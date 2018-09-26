<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <link rel="stylesheet" href="css/home.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

	<style type="text/css">
		li
		{
			font-family: 'Montserrat', sans-serif;
			font-weight: 500;
            font-size: 150%;
			font-style: normal;
		}
        #login
        {
            display: none;
        }
        .hero-image {
          background-image: url("images/1.jpg");
          height: 1080px;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
          opacity: 0.8;
        }
        .hero-text {
          text-align: center;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: white;
        }
body, html {
    margin: 0%;
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.main {
    /* The image used */
    background-image: linear-gradient(to bottom,rgba(0,0,0,0.5),rgba(0,0,0,0.5)80%),url("images/1.jpg");
    height: 95%;
    width: 100%;
    /* Center and scale the image nicely */
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    top:-3%;
    
}

/* Add styles to the form container */
.container {
    position: absolute;
    top:3%;
    left: 65%;
    max-width: 400px;
    z-index: 1000;
}
    h1
    {
        font-family:'Montserrat', 'sans-serif';
        font-weight:700;
        color:white;
    }
    #slogandiv
        {
            width: 90%;
        }
    #slogan
    {
        font-family:'Montserrat',sans-serif;
        font-weight: 600;
        font-size: 80px;
        color:white;
        position: relative;
        top:120px;
        left:50px;
        line-height: 60px;
        width: 90%;
    }
        label{
        font-family:'Montserrat', 'sans-serif';
        font-weight:900;
        color:white;
        }
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: 2px solid white;
}

input[type=text]:focus, input[type=password]:focus {
    border: 2px solid white;
    outline: white;
}
    
    input
    {
       width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: 2px solid white; 
    }

/* Set a style for the submit button */
.btn {
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    background-color: #700202;
}

.btn:hover {
    opacity: 1;
}
#Signup{
      font-family: 'Montserrat',sans-serif;
}
.verticalLine {
  border-left: thick solid white;
    position: absolute;
    left: 50%;
    height: 80%;
    top:10%;

}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src = "images/safety-logo-white.png" height="20px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>-->
      <li><a href="forum/index.php">Forum</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li id="loginbtn"><a href="forum/signin.php">Login</a></li>
    </ul>
  </div>
</nav>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="main" id="main">
    <div class="verticalLine">.
</div>
  <form action="forum/signupredirect.php" class="container" method="post">
    <center><h1 id="Signup"> Sign Up.</h1></center><br>
      <label for="fname"><b> First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required><br><br>

     <label for="lname"><b> Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required><br><br>
      <label for="lname"><b> Phone Number</b></label>
    <input type="text" placeholder="Enter PhoneNumber" name="number" required><br><br>
      
    <label for="email"><b> Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br><br>

    <button type="submit" class="btn">REGISTER</button>
  </form>
<div id="slogandiv">
<h1 id="slogan"> <br>Safety <br><br>Doesn't Happen<br><br><span style="font-weight:100;opacity:0.4;"> By Accident</span><br></h1>
    <div class="verticalLine">.
</div>
</div>
</div>

    <center>
        <div class="login-class" id="login">
            <div class="choice">
                <div class="login">
                    <button class="value" style="padding-bottom: 20px;border-bottom :2px solid grey;color : black;">LOGIN</button>
                    <br/>
                    <form action="login.php" method="post" id="login_form">
                    <label for="loginuser" id="emaillabel" ali><b>Email Address</b></label><br>
                    <input type="text" required placeholder="Email" style=" width:70%; height:5%;"oninvalid="this.setCustomValidity('Please Enter valid Email')"
 oninput="setCustomValidity('')" name="loginuser" onclick="enableLable('emaillable')"/>

                    <br/><br/><br/>
                    <input type="password" placeholder="Password" style=" width:70%; height:5%;" required oninvalid="this.setCustomValidity('Please Enter valid Password')"
 oninput="setCustomValidity('')" name="loginpass"/>

                    <br/><br/><br/>
                        <input type="submit" value="LOGIN" class="submit">
                    <input type="button" value="CLOSE" class="submit" id="close">
                    
                    </form>
                </div>
            </div>
        </div>
    </center>
    <script>
        
        var loginBtn = document.getElementById('loginbtn');
        loginBtn.addEventListener("click",openLogin,false);
        function enableLable(param)
        {
            //alert(typeof param);
            var x =document.getElementById(param);
            x.style.display="block";
        }
        function openLogin(event)
        {
            var mainDiv = document.getElementById('main');
            var loginDiv = document.getElementById('login');
            mainDiv.style.display = "none";
            loginDiv.style.display = "block";
            
        }
        var x = document.getElementById('close');
        x.addEventListener("click",closeLogin,false);
        function closeLogin(event)
        {
            var mainDiv = document.getElementById('main');
            var loginDiv = document.getElementById('login');
            loginDiv.style.display = "none";
            mainDiv.style.display = "block";
            
        }
    </script>
    
<!-- The content of your page would go here. -->

		<footer class="footer-distributed" style="position:relative;top:-14%;">

			<div class="footer-left">



				<p class="footer-company-name">Company Name &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>UVCE</span> Bangalore, Karnataka</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@uvce.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
    
    
    
    
    
    
</body>
</html>
