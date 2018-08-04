<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 10px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
  <script>
     function check()
	 {
		 alert("Working");
		 var ans = 'b';
		 var op = document.getElementById('option').value;
		 alert(op);
		 
		 
	 }
  </script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class><a href="navigate.php">Navigate</a></li>
       
      </ul>
      
    </div>
  </div>
</nav>

<div class="container">

 <center> <h1>Nadela Club Activity: Quiz </h1><br>
 
 <h2>Q1.)What is your name?<br><br>
 <form method="get" >
    <input type="radio" id="option" name="option" value="a" />a)Ron &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="radio" id="option" name="option" value="b" />b)Matt  <br><br>
    <input type="radio" id="option" name="option" value="c" />c)John &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="radio" id="option" name="option" value="d" />d)Max<br>
 </h2>

 <br> <button  type="button" class="btn btn-success" onclick="check()" >Check Answer</button> 
 </form>
 </center>
  </div>
 

<br><br><br><br><br><br><br><br>


<footer class="container-fluid text-center">
  <p>Developed by : Mohd. Omar Aslam</p>
</footer>

</body>
</html>
