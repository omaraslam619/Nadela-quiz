<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nadella Club</title>
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
	    	 var n1="Correct Answer";
		 var n2="Wrong Answer";	
		 var a = 'c';
		 var N1=n1.fontcolor("green");
		 var N2=n2.fontcolor("red");

		 var op = document.getElementById('answer').value;
		 if((op !='a') && (op != 'b' ) && ( op!='c' ) && ( op !='d' )  )
		 {
			 alert("Enter valid option.");
			 exit;
		 }
		 else {
		       if( a==op )
		         {
			       
				document.getElementById('show').innerHTML=N1;
				}
				else
					{
						
						document.getElementById('show').innerHTML=N2;
					}
		 
			  }
	 }
	 function timer()
	 {
		 
		 var sec = 30;
		 
		 
		 
	 }
	function pre()
	{ 
	   window.location.href='index.php';
	}
	function next()
	{
	   window.location.href='q2.php';
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
 
 <h2>Q1.)1 byte is equal to ..... <br><br>
 
    a)4 bits &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    b)10 bits  <br><br>
    c)8 bits  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    d)12 bits<br>
	
 </h2>
<h4> Enter Answer Here :&nbsp<input type="text" id="answer" name="ans" placeholder="eg: a" maxlength="1" required /> </h4>

 <br> <button  type="button" class="btn btn-success" onclick="check()" >Check Answer</button><br>
 <p  id="show" style="background-color:white; border: solid 0px #6E6E6E; width:220px; height: 40px; font-size:31px; " ></p>
 
   
 
    <object align="top">
      <button  type="button" class="btn btn-success" onclick="pre()" ><</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 	
	
      <button  type="button" class="btn btn-success" onclick="next()" >></button>
      </object>
</center>
 </div>
 <br>
 

<footer class="container-fluid text-center">
  <p>Developed by : <strong><i>Mohd. Omar Aslam</i></strong></p>
</footer>

</body>
</html>
