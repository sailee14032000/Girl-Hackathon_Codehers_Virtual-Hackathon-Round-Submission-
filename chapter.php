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
	<link rel="stylesheet" type="text/css" href="https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/css/index.css">
	<link rel="stylesheet" href="youtube_keyboard/src/index.css">
	<link rel="stylesheet" href="keyboard/src/index.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    
    


	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php

	$chpt = explode("?", $_SERVER['REQUEST_URI']);
	$chpt = str_replace('%20', ' ', $chpt);
	$app = $chpt[2];
	?>


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
	    	<li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
	    	<li class="nav-item"><a class="nav-link" href="">Services</a></li>
	    	<li class="nav-item"><a class="nav-link" href=""><i class="fi fi-rr-user"></i></a></li>
	    </ul>
	   
		</span>
	</span>

</nav>
<?php


			$jsondata = file_get_contents("steps/all_chapters.json");
			$json = json_decode($jsondata, true);

			$output = '';
			$var = 0;
			
			foreach ( $json['chapters'] as $display ) {
				  if ($display['id']==$chpt[1])
			  {
			
			$output .='<div class="col d-flex justify-content-center align-items-center">
			<img src="Images/dots1_cr.png" style="position: absolute;
    left: 0%;
    width: auto;
    padding: 0;
    top: 15%;">
				<div class="row w-75 shadow rounded mt-5 mb-5 p-4">
					
					<div class="row w-75">
						
						<h4 style="color: #ff573e;">'.$display['id'].'</h4>
						<b style="display:block">Information:</b>
						<p style="text-align:justify">'.$display['info'].'</p>
						<div class="steps"><b>Steps:</b>
						<br>
							<ul>';
							foreach ( $display['steps'] as $step ) 
							{
								$output .= '<li class="steps_li">'.$step['step'].'</li>';

							}


							$output .='</ul>

						</div></div>

							<div class="row w-25">
					';
					$output .='<div style="background-image:url('.$display['img'].'); background-size: auto;background-position: right top;background-repeat:no-repeat;">
					</div>
					</div>
				      

						<div class="col mt-4"><b style="display:block">Video Tutorials:</b>';

						foreach ( $display['video_links'] as $video ) 
							{
								$output .= '<iframe class="m-2" src="'.$video['link'].'"></iframe>';

							}

							$output.='</div>';

							if($chpt[2]!="Quiz")
							{
								$output .='<b>Try out simulation below:</b>';
							}
							else{

								$quizdata = file_get_contents("steps/quiz.json");
								$quizjson = json_decode($quizdata, true);


								$output .='<b>Try out the quiz below:</b>

								<div class="row w-100 mt-5 mb-5 d-flex justify-content-center align-items-center">
									<div class="row w-50 rounded shadow p-4">
									<div id="quiz_que"><b>Q.';
								foreach ( $quizjson['quiz_chpt'] as $quiz ) {
								if ($quiz['id']==$chpt[1])
									{
										$output .=$quiz['queset'][0]['que'];
										$output .='</b></div>
										<div class="mt-4 mb-4">
											
												 <input type="radio" name="answer" class="quiz_ans" id="a">
												 <label for="a" id="a_text">'.$quiz['queset'][0]['A'].'</label><br>

												 <input type="radio" name="answer" class="quiz_ans" id="b">
												 <label for="b" id="b_text">'.$quiz['queset'][0]['B'].'</label><br>
												 <input type="radio" name="answer" class="quiz_ans" id="c">
												 <label for="c" id="c_text">'.$quiz['queset'][0]['C'].'</label><br>

											

											

										</div>


										<div id="explanation" class="p-2 text-justify"></div>
										<button id="quizsubmit" class="btn btn-success w-auto m-2" onclick="nextquizque()">Next</button>
										</div>

';
										break;

									}
								}


								'
								
								

								</div>

								';
							}
					break;


			
				}

		}
		
		echo $output;
			?>
<?php
if($chpt[2]!="Quiz")
{
	?>	
<div id="virtual_simulation">

	<div id="live_steps">
		<div id="alert">
			<?php echo 'Open '.$app; ?>
		</div>
	</div>
	<div id="mobile_device">
		<div id="volume_buttons">
				<button id="vol_up" class="volume_b" onclick="volume_updown(1)"></button>
				<button id="vol_down" class="volume_b" onclick="volume_updown(-1)"></button>
			
		</div>
		<div id="mainframe">
			<div id="frontcam">
			</div>
			<div id="network_battery">
				<div id="network" class="nb"><i style="margin-right: 1%;" class="fi fi-rr-signal-alt-2"></i>4G</div>
				<div id="battery"  class="nb">100%<i style="margin-right: 1%;" class="fi fi-rr-rectangle-horizontal"></i></div>
			</div>
			<div id="app">

				<div id="power_output">
					<div><img class="logo_app" src="png/power.png"><p>Power off</p></div>
					<div><img class="logo_app" src="png/restart.png"><p>Restart</p></div>
				</div>
				<div id="volume_output">
					<table>
						<tr id="vol-12"><th style="border-radius: 20px 20px 0px 0px;text-align: center;"><img style="width: 80%" src="png/high-volume.png" ></th></tr>
						<tr id="vol-11"><th></th></tr>
						<tr id="vol-10"><th></th></tr>
						<tr id="vol-9"><th></th></tr>
						<tr id="vol-8"><th></th></tr>
						<tr id="vol-7"><th></th></tr>
						<tr id="vol-6"><th></th></tr>
						<tr id="vol-5"><th></th></tr>
						<tr id="vol-4"><th></th></tr>
						<tr id="vol-3"><th></th></tr>
						<tr id="vol-2"><th></th></tr>
						<tr id="vol-1"><th style="border-radius: 0px 0px 20px 20px;text-align: center;"><img style="width: 80%" src="png/volume-down.png" ></th></tr>
					</table>
				</div>

				<div id="all_apps">
					







					<div id="chrome" class="app" ><img onclick="open_app('chrome','Google Search')" src="png/001-chrome.png" class="logo_app">

						Chrome</div>
					<div id="youtube"  class="app"><img onclick="open_app('chrome','Youtube Search')" src="png/youtube.png"  class="logo_app">Youtube</div>

					<div id="google-maps" onclick="open_app('chrome','google-maps')" class="app"><img src="png/google-maps.png"  class="logo_app" >Maps</div>
					
					<div id="settings"  onclick="open_app('chrome','Mobile Settings')" class="app"><img src="png/settings.png"  class="logo_app">Settings</div>
					
					<?php 

					if($chpt[1]=="WhatsApp Videocall")
					{
						$chapter_to_open = "WhatsApp Videocall";
					}
					else{
						$chapter_to_open = "WhatsApp";
					}


					?>
					<div id="whatsApp" onclick="open_app('chrome','<?php echo $chapter_to_open;?>')" class="app"><img src="png/002-whatsapp.png"  class="logo_app" >WhatsApp</div>

					<div id="calendar" onclick="open_app('chrome','Calendar')"  class="app"><img src="png/003-calendar.png"  class="logo_app">Calendar</div>

					<div id="clock" onclick="open_app('chrome','Clock')" class="app"><img src="png/004-clock.png" class="logo_app">Clock</div>
					
					<div id="gmail" onclick="open_app('chrome','Gmail')" class="app"><img src="png/005-gmail.png" onclick="open_app('chrome','gmail')"  class="logo_app">Gmail</div>

					<div id="phone" onclick="open_app('chrome','Call')" class="app"><img src="png/006-phone-call.png"  class="logo_app">Call</div>
					
					<div id="sms" class="app"><img src="png/007-mail.png"  class="logo_app">SMS</div>
					
				</div>				
			</div>

			<div id="mobile_device_buttons">
				
				<div id="mobile_device_button_appOverview" class="mdb"><i class="fi fi-rr-menu-burger"></i></div>
				
				<div id="mobile_device_button_home" class="mdb" onclick="open_app('home_screen','home')"><i class="fi fi-rr-home"></i></div>
				
				<div id="mobile_device_button_back" class="mdb"><i class="fi fi-rr-angle-double-small-left"></i></div>
			</div>	
		</div>



		<div id="power_buttons">
			<button id="pow_button" class="pow_b" onclick="power()"></button>
		</div>
	
	</div>
	
</div>
<?php } ?>
				</div>



			</div>
	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_transalte');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">

	function power(){
		var pow_out = document.getElementById('power_output');
		pow_out.classList.toggle("show");
		pow_out.style.display = 'flex';
	}

	let volume_count = 0
	function volume_updown(x){
		var vol_bar = document.getElementById('volume_output');
		vol_bar.style.padding = "5%";
		vol_bar.style.width = "15%";

		if (x == 1 && volume_count>=12){
			volume_count = 12;
		}else if(x == 1 && 0<volume_count<12){
			volume_count += 1
			document.getElementById('vol-'+volume_count).style.backgroundColor = "white";
		}else if (x == -1 && volume_count<=0){
			volume_count = 0;
		}else if(x == -1){
			document.getElementById('vol-'+volume_count).style.backgroundColor = "#ccc";
			volume_count -= 1
		}
		setTimeout(() => {
		  var vol_bar = document.getElementById('volume_output');
		  vol_bar.style.padding = "5% 0";
		  vol_bar.style.width = "0%";
		  console.log('Yo');
		}, 4000);
		
	}

	let chpt = '<?php echo $chpt[1]; ?>';


	let q_index = 0;

	function readTextFile(file, callback) {
		    var rawFile = new XMLHttpRequest();
		    rawFile.overrideMimeType("application/json");
		    rawFile.open("GET", file, true);
		    rawFile.onreadystatechange = function() {
		        if (rawFile.readyState === 4 && rawFile.status == "200") {
		            callback(rawFile.responseText);
		        }
		    }
		    rawFile.send(null);
		}

	function nextquizque(){

		readTextFile("steps/quiz.json", function(text){
		    var data = JSON.parse(text);
		    for (var i=0;i<=data['quiz_chpt'].length;i++)
		    {
		    	if (data['quiz_chpt'][i]['id']==chpt){

		    		var answerEls = document.querySelectorAll('.quiz_ans');
		    		for(var j = 0;j<=answerEls.length;j++)
		    		{
		    			if(answerEls[j].checked)
		    			{
		    				if(data['quiz_chpt'][i]['queset'][q_index]['ans']==answerEls[j].id)
		    				{
		    					var que = document.getElementById('quiz_que');
		    					var a = document.getElementById('a_text');
		    					var b = document.getElementById('b_text');
		    					var c = document.getElementById('c_text');
		    					var explanation = document.getElementById('explanation');
		    					explanation.innerHTML = "" ;
		    					q_index += 1;
		    					if (q_index<=data['quiz_chpt'].length)
		    					{


		    					que.innerHTML = 'Q.'+data['quiz_chpt'][i]['queset'][q_index]['que'];
		    					a.innerHTML = data['quiz_chpt'][i]['queset'][q_index]['A'];
		    					b.innerHTML = data['quiz_chpt'][i]['queset'][q_index]['B'];
		    					c.innerHTML = data['quiz_chpt'][i]['queset'][q_index]['C'];
		    					
		    					}



		    					
		    				}
		    				else{
		    					var explanation = document.getElementById('explanation');
		    					explanation.innerHTML = "<b>Explanation</b>:<br>Err! "+data['quiz_chpt'][i]['queset'][q_index]['explanation'] ;



		    					

		    				}
		    			}
		    		}

		    	}
		    }
		    
		});


	}

	

	function open_option(){
    
	    var option = document.getElementById('options');
	    option.style.display = 'block';
	    
	    var  alert = document.getElementById('alert');
			alert.innerHTML =  "Click on gallery icon";
		    alert.style.display = 'block';
	}

	function whatsapp_window(x)
	{
		if(x==2)
		{
			var  alert = document.getElementById('alert');
			alert.innerHTML =  "Click on attachment icon";
		    alert.style.display = 'block';
		  
		}
		else if(x==3)
		{
			var  alert = document.getElementById('alert');
			alert.innerHTML =  "Select a image";
		    alert.style.display = 'block';
		  
		}

		else if(x==4)
		{
			var  alert = document.getElementById('alert');
			alert.innerHTML =  "Click send icon";
		    alert.style.display = 'block';
		  
		}
		else if(x==5)
		{
			var  alert = document.getElementById('alert');
			alert.innerHTML =  "Congratulations! You just learnt how to send multimedia file on WhatsApp";
		    alert.style.display = 'block';
		  
		}

        for(i=1;i<=x;i++){
            console.log(i + '/' + x);
            if(i != x){
                try {
                document.getElementById('whatsapp_screen_' + i).style.display = 'none';
                continue;
                } catch (error) {
                    continue
                }
            }
            document.getElementById('whatsapp_screen_' + x).style.display = 'block';
        }    
	}


	function open_app(app,chapter)
	{
		
		var mscript = document.getElementById('mob_keyboard_s');
		if (mscript!=null)
		{
			document.head.removeChild(mscript);
		}
		var script = document.getElementById('keyboard_Script');
		if(script!=null)
		{
			document.head.removeChild(script);
		}console.log("removed");

		if(chapter!=chpt)
		{
			console.log(chapter,chpt);
			return
		}

		var app = document.getElementById('app');
		var alert = document.getElementById('alert');
		getFileObject('apps/'+chapter +'.txt', function (fileObject) {
     
     	var abc = fileObject;

     	console.log(chapter+'.txt');

	     var fr = new FileReader();

	     fr.onload = function(){
	     	app.innerHTML = fr.result;

	    if (chapter=="Youtube Search")
	   	{
	 	  var script = document.createElement('script');
	   	  script.id = 'mob_keyboard_s';
	   	  script.setAttribute('src', 'https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/index.js');
		  document.head.appendChild(script);

	   	  var script = document.createElement('script');
	   	  script.id ='keyboard_Script';
	   	  console.log(script);
		  script.setAttribute('src', 'keyboard/src/index.js');
		  document.head.appendChild(script);
      	}
      	else if(chapter=="WhatsApp Videocall"){
      		var  alert = document.getElementById('alert');
			alert.innerHTML =  "We will learn how to do videocall with user - Ramesh. Click on user - Ramesh";
		    alert.style.display = 'block';
		  
		
      	}
      	else if(chapter=="WhatsApp"){
      	
      		var  alert = document.getElementById('alert');
			alert.innerHTML =  "We will learn how to send Image to user - Ramesh. Click on user - Ramesh";
		    alert.style.display = 'block';
		  
		
      	}
		else if(chapter=="Google Search")
		{
			var script = document.createElement('script');
		   	script.id = 'mob_keyboard_s';
		   	script.setAttribute('src', 'https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/index.js');
			document.head.appendChild(script);
		   	var script = document.createElement('script');
		   	script.id ='keyboard_Script';
			script.setAttribute('src', 'keyboard/src/google_index.js');

			document.head.appendChild(script);
		}
		else if(chapter=="Mobile Settings"){
	   	  var script = document.createElement('script');
	   	  console.log(script);
		  script.setAttribute('src', 'keyboard/src/settings.js');
		  document.head.appendChild(script);
		}


		else if(chapter=="Gmail")
		{
		  var script = document.createElement('script');
	   	  script.id = 'mob_keyboard_s';
	   	  script.setAttribute('src', 'https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/index.js');
		  document.head.appendChild(script);
	   	  var script = document.createElement('script');
	   	  script.id ='keyboard_Script';
	   	  console.log(script);
		  script.setAttribute('src', 'keyboard/src/email.js');
		  document.head.appendChild(script);
		}
		else
		{
			console.log('Hi');
				
				
		}
        }

		     fr.readAsText(abc)

			
		     
		});



		

	}

	    var getFileBlob = function (url, cb) {
    

    	var xhr = new XMLHttpRequest();
        xhr.open("GET", url);
        xhr.responseType = "blob";
        xhr.addEventListener('load', function() {
            cb(xhr.response);
        });
        xhr.send();
	};

	var blobToFile = function (blob, name) {
        blob.lastModifiedDate = new Date();
        blob.name = name;
        return blob;
	};

	var getFileObject = function(filePathOrUrl, cb) {
       getFileBlob(filePathOrUrl, function (blob) {
          cb(blobToFile(blob, 'test.txt'));
       });
	};


	function openChat(x)
	{
		for(i=1;i<=x;i++){
            if(i != x){
                try {
                document.getElementById('whatsappScreen' + i).style.display = 'none';
                continue;
                } catch (error) {
                    continue
                }
            }
            document.getElementById('whatsappScreen' + x).style.display = 'block';
        }
        if(x==2)
        {
        	var  alert = document.getElementById('alert');
			alert.innerHTML =  "Click on videocall button";
		    alert.style.display = 'block';
		  
        }

        else if(x==3)
        {
        	var  alert = document.getElementById('alert');
			alert.innerHTML =  "Congratulations!! You learnt how to do WhatsApp videocall.";
		    alert.style.display = 'block';

        	var video = document.getElementById('whatsapp_cam'),
                vendorUrl = window.URL || window.webkitURL;
            if (navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        video.srcObject = stream;
                    }).catch(function (error) {
                        console.log("Something went wrong!");
                    });
            }
        }  
	}



</script>

</body>
</html>
