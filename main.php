

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="datatable/media/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="datatable/media/images/favicon.ico">
	<link rel="apple-touch-startup-image" href="datatable/media/images/favicon.ico">

    <title>Your Birthday!</title>

 
    <link href="css/bootstrap.css" rel="stylesheet"> 
    <link href="css/starter-template.css" rel="stylesheet">
	 <link href="css/search.css" rel="stylesheet"> 

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.SATELLITE
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>




  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Your Birthday!</a>
        </div>
        <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="myaccount.html">My Account</a></li>         
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container" id="search">
      <div class="starter-template">
       <div class="form-style-5">
		<form action="code/getBday.php" method="get">
		<fieldset>
		<legend>Enter your date of birth:</legend>
		<input type="date" name="bday" placeholder="Happy Birthday">
		</fieldset>
		<input type="submit" value="Search" />
		</form>
	</div>

<div id="googleMap" style="width:500px;height:380px;"></div>

	   
    </div>
	  
	  

    </div><!-- /.container -->

   
  </body>
</html>


