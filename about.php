
<?php
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <title>Speech color changer</title>

    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
    <style>
  body{
      background: black;
}
</style>
  </head>

  <body>
 
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a do_action="home" href="http://localhost/speech/speech/index.php">Home</a></li>
        <li class="active"><a do_action="About" href="http://localhost/speech/speech/about.php">About</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="jumbotron2">
  <div class="container text-center">
 <form id="form">
 
  <div class="row">
    <div class="col-sm-6">
    <h1>About page</h1>  
</div>
    <div class="col-sm-6">
	<?php
	
	if(isset($_GET['name'])){
		echo '<b>Form Data You Enter </b><br/> Name:'.$_GET['name'].'<br/> Contact Number:'.$_GET['contact_number'].'<br/> Email:'.$_GET['Email'];
	}
	?>
    <div class="form-group"><label class="col-sm-6" for="Name">Name: </label><input do_action="Name" class="col-sm-6" type="text" name="name" id="name"></div>
	<div class="form-group"><label class="col-sm-6" for="Contact">Contact Number :</label> <input do_action="Contact Number" class="col-sm-6" type="text" name="contact_number" id="contact_number"></div>
	<div class="form-group"><label class="col-sm-6" for="Email">Email :</label> <input class="col-sm-6" do_action="Email" type="text" name="Email" id="email"></div>
	<div class="form-group"><input type="submit" value="validate"></div>
	</div>
  </div>
 </form>
</div>
  </div>
<div class="container-fluid bg-3 text-center">    
  <h3>Module</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <a do_action="SERVER" href="http://localhost/speech/speech/moreinfo.php?page=netconfiguration">SERVER</p>
      <img src="download.jpeg" class="img-responsive" style="width:100%" alt="Image">
    </div>
	<div class="col-sm-4"> 
	 <a do_action="Application" href="http://localhost/speech/speech/moreinfo.php?page=application">Application </a>
      <img src="download.jpeg" class="img-responsive" style="width:100%" alt="Image">
	</div>
    <div class="col-sm-4"> 
      <a href="http://localhost/speech/speech/moreinfo.php?page=terminal" do_action="TERMINAL">TERMINAL </p>
      <img src="download.jpeg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Mitel</p>
</footer>


    <p class="hints"></p>
    <div>
        <p class="output"><em></em></p>
    </div>
    <script src="script.js"></script>
  </body>
</html>