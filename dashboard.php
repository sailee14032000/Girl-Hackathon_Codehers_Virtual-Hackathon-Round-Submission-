<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/1840751f25.js" crossorigin="anonymous"></script>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
	<link rel="stylesheet" type="text/css" href="https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css">
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
	    	<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
	    	<li class="nav-item"><a class="nav-link active" href="">Dashboard</a></li>
	    	<li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
	    	<li class="nav-item"><a class="nav-link" href="index.php#form-signup"><i class="fi fi-rr-user"></i></a></li>
	    </ul>
	   
		</span>
	</span>

</nav>
<div class="row m-0 d-flex justify-content-center align-items-center mt-4">
	<img src="Images/dots1_cr.png" style="position: absolute;
    left: 0%;
    width: auto;
    padding: 0;
    top: 15%;">
	
<div class="row rounded shadow-sm p-5 w-75">
	<div class="row d-flex align-items-center">

		<button class="btn btn-success active shadow-sm w-auto"><i style="margin-right: 8px;" class="fi fi-rr-book"></i>Tutuorials</button>
		<button class="btn btn-success shadow-sm w-auto"><a class="page_link" href="Flappy bird/Flappy bird"><i style="margin-right: 8px;" class="fi fi-rr-puzzle-piece"></i>Games</a></button>
	</div>
	
		

			<?php

			$jsondata = file_get_contents("steps/tutorials.json");
			$json = json_decode($jsondata, true);
			$output = '<div class="accordion shadow-sm rounded p-0" id="accordionExample">';
			$var = 0;
			

			foreach ( $json['ChptData'] as $display ) {
			  $output .=
			  '<div class="accordion-item rounded">
		    <h5 class="accordion-header" id="headingOne">
		      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$var.'" aria-expanded="true" aria-controls="collapseOne">
		        '.$display['id'].'
		      </button>
		    </h5>
		    <div id="collapse'.$var.'" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		        <p>'.$display['info'].'</p><b>Chapters:</b><ul style="margin-top:.5rem">';
		        foreach ($display['chpt'] as $value) {
		        	if($value['name']=='WhatsApp')
		        	{
		        		$output .= '<li class="chapter_li"><a class="chpt_links" href="chapter.php?'.$value['name'].'?'.$value['app'].'">Sending Multimedia file on WhatsApp</a></li>';


		        	}
		        	else if($value['name']=='Gmail')
		        	{
		        		$output .= '<li class="chapter_li"><a class="chpt_links" href="chapter.php?'.$value['name'].'?'.$value['app'].'">Creating Gmail account</a></li>';


		        	}
		        	else{
		        		$output .= '<li class="chapter_li"><a class="chpt_links" href="chapter.php?'.$value['name'].'?'.$value['app'].'">'.$value['name'].'</a></li>';

		        	}
		        	
		        }

		        
		        $output .='</ul>
		        </div>
		    </div>
		  </div>';
		  $var += 1;


			  
			}

			$output .= "</div>";

			echo $output;
			?>
		  
		  
	

	

</div>
<img src="Images/dots1_cr.png" style="position: absolute;
    right: 0%;
    bottom:0%;
    width: auto;
    padding: 0;transform: rotate(90deg);">
</div>


	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_transalte');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>