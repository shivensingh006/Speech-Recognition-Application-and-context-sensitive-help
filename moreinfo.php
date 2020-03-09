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


<style>
body{
       background: #f6f8fa;
    color: #fff;
}
#maincontent{
	width:100%;
	margin-top: -20px;
}
</style>

<script>
window.onload = function(){


var elems = document.getElementsByClassName("outlineItem");

for (var i = 0; i < elems.length; i++){
  elems[i].addEventListener('click', function(){
    this.classList.toggle('hidden');
  })
}


}
</script>
<div class="jumbotron2">
<?php
$page=$_GET['page'];
if($page){
if($page == 'netconfiguration'){
	$file = 'http://localhost/speech/speech/web/viewer.html#searchhelp=FTP SERVER CONFIGURATION PARAMETERS';
	echo "<embed id='example' src='$file' width='100%' height='500'>";

}else if($page == 'terminal'){
	$file = 'http://localhost/speech/speech/web/viewer.html#searchhelp=7.6.5DEFINING THE PRODUCTION TERMINAL SOFTWARE PACKAGE';
	echo "<embed id='example' src='$file' width='100%' height='500'>";
	
}else if($page == 'application'){
	$file = 'http://localhost/speech/speech/web/viewer.html#searchhelp=LAUNCHING THE TMA APPLICATION';
	echo "<embed id='example' src='$file' width='100%' height='500'>";
	
}else if($page == 'inventory'){
	$file = 'http://localhost/speech/speech/web/viewer.html#searchhelp=7.6.5DEFINING THE PRODUCTION TERMINAL SOFTWARE PACKAGE';
	echo "<embed id='example' src='$file' width='100%' height='500'>";
	
}
}
?>
<div class="addsection" style="margin-top: 10px;">
	
</div>
</div>
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
