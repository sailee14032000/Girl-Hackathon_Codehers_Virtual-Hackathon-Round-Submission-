let alert = document.getElementById("alert");
let index = 1;
let brightness_changed = false;
(() => {
    function readTextFile(file, callback) {
        var rawFile = new XMLHttpRequest();
        rawFile.overrideMimeType("application/json");
        rawFile.open("GET", file, true);
        rawFile.onreadystatechange = function () {
            if (rawFile.readyState === 4 && rawFile.status == "200") {
                callback(rawFile.responseText);
            }
        };
        rawFile.send(null);
    }

    readTextFile("steps/settings_.json", function (text) {
        data = JSON.parse(text);
        alert.innerHTML = data[0]["steps"][index];
        console.log(data);
        alert.style.display = "block";
        index += 1;
    });
})();

function brightness(e){
	if (brightness_changed==false)
        {
            alert.innerHTML = data[0]["steps"][index];
            alert.style.display = "block";
            index += 1;
            brightness_changed = true;
        }

		var container = document.getElementById('settings_screen_2');
		var val = e.value;
		container.setAttribute("style", "filter: brightness("+val+"%);");
		container.style.display = "block";
	}

	function show_notifications(){
		alert.innerHTML = data[0]["steps"][index];
    alert.style.display = "block";
    index += 1;
		 var checkBox = document.getElementById("mobData");
		  var text = document.getElementById("notifications");
		  if (checkBox.checked == true){
		    text.style.height = "fit-content";
		    text.style.top = "0%";
		    text.style.padding = "2% 3%";
		  } else {
		    text.style.height = "0%";
		    text.style.padding = "0%";
		  }
	}

function settings_window(x){
	alert.innerHTML = data[0]["steps"][index];
    alert.style.display = "block";
    index += 1;

        for(i=1;i<=x;i++){
            console.log(i + '/' + x);
            if(i != x){
                try {
                document.getElementById('settings_screen_' + i).style.display = 'none';
                continue;
                } catch (error) {
                    continue
                }
            }
            document.getElementById('settings_screen_' + x).style.display = 'block';
        }
        
}
