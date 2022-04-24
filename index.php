<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/1840751f25.js" crossorigin="anonymous"></script>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>



<nav class="shadow-sm p-0 w-100 navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand logo-size" href="#"><img class="logo" src="Images/glasses.png" />DigiBa</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
      
  </a>
	<span class="collapse navbar-collapse">
		<span class="container clearfix">
		<ul class="navbar-nav mr-auto mb-2 mb-lg-0 float-right">
			<li class="nav-item" id="google_transalte"></li>
	    	<li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
	    	<li class="nav-item"><a class="nav-link" href="Dashboard.php">Dashboard</a></li>
	    	<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
	    	<li class="nav-item"><a class="nav-link" href="#form-signup"><i class="fi fi-rr-user"></i></a></li>

	    </ul>
	   
		</span>
	</span>

</nav>

<div class="container p-4 ">
	<img src="Images/dots1_cr.png" style="position: absolute;left: 0;">

	<div class="row">
		<div class="col m-0">
			<div class="row pr-2 d-flex justify-content-end"><img class="img-fluid home-img" src="Images/home1.png"></div>
			<div class="row pr-2 d-flex justify-content-end"><img class="img-fluid home-img" src="Images/home3.png"></div>
			
		</div>
		<div class="col m-0 d-flex  align-items-center justify-content-center">
			<div class="row p-2 text-center d-flex justify-content-center">
				<h2 class="text-center"><img  style="width: auto" src="Images/glasses.png"/>DigiBa</h2>
				<p class="feature-text">A tool to
					<span class="feature">Learn</span>
					<span class="feature">Explore</span>
					<span class="feature">Evaluate</span>
					<span class="feature">Communicate</span>
				   for you!
				</p>
				<button class="btn btn-success shadow" style="width: auto"><a class="page_link" href="Dashboard.php">Let's Get Started  <i class="fas fa-right-long"></i></a></button>
			</div>
		</div>
		<div class="col m-0">
			<div class="row pl-2 d-flex justify-content-left"><img class="img-fluid home-img" src="Images/home2.png"></div>
			<div class="row pl-2 d-flex justify-content-left"><img class="img-fluid home-img" src="Images/home4.png"></div>
			
		</div>
	</div>
	<img src="Images/dots1_cr.png" style="position: absolute;right: 1%;transform: rotate(90deg);">
	
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fed3c7" fill-opacity="1" d="M0,256L60,224C120,192,240,128,360,133.3C480,139,600,213,720,208C840,203,960,117,1080,96C1200,75,1320,117,1380,138.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
<div class="row container-fluid pl-5 pr-5 services m-0" id="services">
  <div class="col">
    <div class="card shadow-sm h-100 rounded pl-0">
      <div class="card-body">
        <h5 class="card-title"><i class="fi fi-rr-e-learning"></i>Interactive Learning</h5>
        <p class="card-text">Learn various digital literacy chapters with virtual smart device.</p>
        <a href="Dashboard.php" class="page_link btn btn-success shaow">Learn</a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card shadow-sm h-100 rounded">
      <div class="card-body">
        <h5 class="card-title"><i class="fi fi-rr-paper-plane"></i>Games and Activities</h5>
        <p class="card-text">Play games to boost your digital literacy knowledge.</p>
        <a href="Dashboard.php" class="page_link btn btn-success shadow">Play</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow-sm h-100 rounded pr-0">
      <div class="card-body">
        <h5 class="card-title"><i class="fi fi-rr-comment"></i>Quiz and Activities</h5>
        <p class="card-text">Test your digital literacy knowledge on the go!</p>
        <a href="Dashboard.php" class="page_link btn btn-success shadow">Start</a>
      </div>
    </div>
  </div>

</div>
<svg style="position:relative;top:-5%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fed3c7" fill-opacity="1" d="M0,96L60,128C120,160,240,224,360,218.7C480,213,600,139,720,133.3C840,128,960,192,1080,202.7C1200,213,1320,171,1380,149.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>


<div class="row w-100 mb-5 d-flex" style="padding-left:12.5%;padding-right:12.5%;position: relative;top: -5%">
	<div class="col w-25 pr-0" style="flex: 1;">
		<img class="img-fluid" src="Images/4903410.jpg">
	</div>
	<div class="col w-50 d-flex  justify-content-center align-items-center" style="flex: 1;flex-direction: column;background: #fff2ee;">
		<h2 class="text-center"><img  style="width: auto" src="Images/glasses.png"/>DigiBa</h2>
		<h6 class="p-4" style="text-align: center;">
			Our solution helps senior
citizens familiar with new digital apps in a fun and very interactive way by providing them with video
tutorials and interactive simulation on virtual device.</h6>
<img src="Images/dots1_cr.png" style="position: absolute;right: 0%;bottom: 0%">
	<img src="Images/dots1_cr.png" style="position: absolute;left: 0%;top: 0%">


	</div>


	
</div>

<div class="d-flex justify-content-center align-items-center mt-5 mb-5" id="form-signup">

	<form class="w-50 shadow rounded p-4" id="signin_form">

		<h4>Sign in</h4>
		<div class="form-group">
	    <label for="InputEmail1">Email address</label>
	    <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="InputPassword">Password</label>
	    <input type="password" class="form-control" id="InputPassword" placeholder="Password">
	  </div>
	  <p style="font-size: 14px;cursor: pointer;color: blue" onclick="OpenForm('register_form','signin_form')">New member? Register</p>
	  <button type="submit" class="btn btn-success">Submit</button>
	</form>
	<form class="w-50 shadow rounded p-4" id="register_form">
		<h4>Register</h4>
		<div class="form-group">
	    <label for="singnup_name">Name</label>
	    <input type="text" class="form-control" id="singnup_name"  placeholder="Enter name">
	    </div>
		<div class="form-group">
	    <label for="singnup_email">Email address</label>
	    <input type="email" class="form-control" id="singnup_email" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="singnup_password">Password</label>
	    <input type="password" class="form-control" id="singnup_password" placeholder="Password">
	  </div>
	  <p style="font-size: 14px;cursor: pointer;color: blue" onclick="OpenForm('signin_form','register_form')">New member? Register</p>
	  
	  <button type="submit" class="btn btn-success">Submit</button>
	</form>




</div>

	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_transalte');
}
	function OpenForm(id1,id2){
		var showid = document.getElementById(id1);
		var hideid = document.getElementById(id2);
		showid.style.display="block";
		hideid.style.display="none";
		
		

	}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>