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
     function f1()
	 {
		 
		 
		 window.location.href="q1.php";
		 
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
        <li ><a href="navigate.php">Navigate</a></li>
       
      </ul>
      
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="image/1.jpg" alt="Image">
          <div class="carousel-caption">
          
          </div>      
        </div>

        
		<div class="item">
          <img src="image/2.jpg" alt="Image">
          <div class="carousel-caption">
            
          </div>      
        </div>
		
		
		<div class="item">
          <img src="image/5.jpg" alt="Image">
          <div class="carousel-caption">
            
          </div>      
        </div>

          
		  
		<div class="item">
          <img src="image/3.jpg" alt="Image">
          <div class="carousel-caption">
            
          </div>      
        </div>

		</div>
	  


      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      <h1> Welcome Juniors!!!</h1><br>
	  <h3>This quiz is organized by the Nadela Club .<br>
	  We hope you'll enjoy it alot.<br><br></h3>
	  <button type="button" class="btn btn-success" onclick="f1()" >Let's Start!</button>
    </div>
    
  </div>
</div>

</div>
<br>


<footer class="container-fluid text-center">
  <p>Developed by : Mohd. Omar Aslam</p>
</footer>

</body>
</html>
