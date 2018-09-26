<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
    session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Forum for complaints and getting feedback for Woman Safety" />
    <meta name="keywords" content="put, keywords, here" />
    <title>SheSafe Discussion</title>
    <link rel="stylesheet" href="../forum.css" type="text/css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
        body{
            background-image: linear-gradient(to bottom, rgba(255,255,255,0.9) 0%,rgba(255,255,255,0.8) 80%),url(../images/banckground-login.png);
        }
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
        input[type='submit'],input[type='button']
        {
            font-family: 'Montserrat',sans-serif;
    font-size: 28px;
    width:50%; 
    height:20%; 
    text-align:center;  
    border: 0;
    background-color:black; 
    color:white; 
    border-radius:2px;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2),0 3px 15px 0 rgba(0,0,0,0.19);
}
        input[type='text']{
    font-family: 'Montserrat',sans-serif;
    font-size: 15px;
    border:none;
    border-bottom: 1px solid grey;
    padding-bottom: 5px;
}
input[type='password']{
    font-family: 'Montserrat',sans-serif;
    font-size: 15px;
    border:none;
    border-bottom: 1px solid grey;
    padding-bottom: 5px;
}

input[type='text']:focus{
    outline:0 !important;
}
input[type='password']:focus{
    outline:0 !important;
}
input[type='email']:focus{
    outline:0 !important;
}
        
	</style>
</head>
<body>    

        <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="../index.php"><img src = "../images/safety-logo-white.png" height="20px"></a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Forum Home</a></li>
        <li><a href="create_topic.php">Create A Topic</a></li>
        <li><a href="create_cat.php">Create A Category</a></li>
            <li><a href="../dashboard.php">Dashboard</a></li>
          </ul>
            </div>
    </nav>
        <div id="wrapper">    
        <div id="userbar">
            <div id="userbar">
                <?php
                    if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'])
                    {
                        echo 'Hello' . $_SESSION['user_name'] . '. Not you? <a href="signout.php">Sign out</a>';
                    }
                    else
                    {
                        echo '<a href="signin.php">Sign in</a> or <a href="signup.php">Create an account</a>';
                    }
                ?>
            </div>
    </div>
        <div id="content">
            