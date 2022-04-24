
let index = 1;
let  data;
let alert = document.getElementById('alert');
  
(()=>{



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


readTextFile("youtube_chpt.json", function(text){
    data = JSON.parse(text);
    alert.innerHTML = data[0]['steps'][index];
    console.log(data);
    alert.style.display = 'block';
    index += 1;
});




let Keyboard = window.SimpleKeyboard.default;

let keyboard = new Keyboard({
  onChange: input => onChange(input),
  onKeyPress: button => onKeyPress(button),
  mergeDisplay: true,
  layoutName: "default",
  layout: {
    default: [
      "q w e r t y u i o p",
      "a s d f g h j k l",
      "{shift} z x c v b n m {backspace}",
      "{numbers} {space} {ent}"
    ],
    shift: [
      "Q W E R T Y U I O P",
      "A S D F G H J K L",
      "{shift} Z X C V B N M {backspace}",
      "{numbers} {space} {ent}"
    ],
    numbers: ["1 2 3", "4 5 6", "7 8 9", "{abc} 0 {backspace}"]
  },
  display: {
    "{numbers}": "123",
    "{ent}": "&#8617;",
    "{escape}": "esc ⎋",
    "{tab}": "tab ⇥",
    "{backspace}": "&#x232b",
    "{capslock}": "caps lock ⇪",
    "{shift}": "⇧",
    "{controlleft}": "ctrl ⌃",
    "{controlright}": "ctrl ⌃",
    "{altleft}": "alt ⌥",
    "{altright}": "alt ⌥",
    "{metaleft}": "cmd ⌘",
    "{metaright}": "cmd ⌘",
    "{abc}": "ABC"
  }
});

/**
 * Update simple-keyboard when input is changed directly
 */
document.querySelector("#input_").addEventListener("input", event => {
  keyboard.setInput(event.target.value);
});

console.log(keyboard);

function onChange(input) {
  document.querySelector("#input_").value = input;
  console.log("Input changed", input);
}

function onKeyPress(button) {
  console.log("Button pressed", button);

  /**
   * If you want to handle the shift and caps lock buttons
   */
  if (button==="{ent}")
  {

    var input_val = document.querySelector("#input_").value;

    if(input_val==="cat")
    {
      var simp_key = document.getElementsByClassName('simple-keyboard');
      var yt_home_m = document.getElementById('youtube_home_menu');
      var yt_search_m = document.getElementById('youtube_search_menu');
      var yt_logo = document.getElementById('youtube_logo');
      var yt_video_img = document.getElementsByClassName('yt_video_img');
      var yt_video_title = document.getElementsByClassName('yt_video_title');
      var yt_video= document.getElementsByClassName('youtube_video');
      var yt_search = document.getElementById('youtube_search');
      var cat_info = [["png/yt_cat.jpeg","MS CAT"],["png/yt_cat2.jpeg","kitty"]]

      yt_home_m.style.display = 'flex';
      yt_logo.style.display = 'flex';
      yt_search.style.border = 'none';


      yt_search_m.style.display = 'none';
      simp_key[0].style.display = 'none';

      for (var i = 0;i<yt_video.length;i++)
      {
        yt_video_img[i].setAttribute('src',cat_info[i][0]);
        yt_video_title[i].innerHTML = cat_info[i][1];
        yt_video[i].style.display = 'block';

      }
      alert.innerHTML = data[0]['steps'][index];
      alert.style.display = 'block';
      
    }
    else{
      index -= 1;

      alert.innerHTML = data[0]['err'] + data[0]['steps'][index];
      alert.style.display = 'block';
      index += 1;

    }

  
    

  }
  if (button === "{shift}" || button === "{lock}") handleShift();
  if (button === "{numbers}" || button === "{abc}") handleNumbers();

}

function handleShift() {
  let currentLayout = keyboard.options.layoutName;
  let shiftToggle = currentLayout === "default" ? "shift" : "default";

  keyboard.setOptions({
    layoutName: shiftToggle
  });
}

function handleNumbers() {
  let currentLayout = keyboard.options.layoutName;
  let numbersToggle = currentLayout !== "numbers" ? "numbers" : "default";

  keyboard.setOptions({
    layoutName: numbersToggle
  });
}






})()


function open_searchbar(){

    alert.innerHTML = data[0]['steps'][index];
    alert.style.display = 'block';
    index += 1;
    
    var simp_key = document.getElementsByClassName('simple-keyboard');
    var yt_videos = document.getElementsByClassName('youtube_video');
    var yt_home_m = document.getElementById('youtube_home_menu');
    var yt_search_m = document.getElementById('youtube_search_menu');
    var yt_search = document.getElementById('youtube_search');
    var input_ = document.getElementById('input_');
    var yt_logo = document.getElementById('youtube_logo');
    
    simp_key[0].style.display = 'block';
    yt_home_m.style.display = 'none';
    yt_logo.style.display = 'none';

    for (var i = 0;i<yt_videos.length;i++)
    {
      yt_videos[i].style.display = 'none';
    }
    yt_search_m.style.display = 'flex';
    yt_search.style.border = '1px solid #383737';
    input_.style.display = 'flex';
    

  }
