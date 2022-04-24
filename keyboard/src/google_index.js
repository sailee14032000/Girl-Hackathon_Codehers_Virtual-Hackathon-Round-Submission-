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


readTextFile("steps/google_search_all.json", function(text){
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
document.querySelector("#google_search_input").addEventListener("input", event => {
  keyboard.setInput(event.target.value);
});

console.log(keyboard);

function onChange(input) {
  document.querySelector("#google_search_input").value = input;
  console.log("Input changed", input);
}

function onKeyPress(button) {
  console.log("Button pressed", button);

  /**
   * If you want to handle the shift and caps lock buttons
   */
  if (button==="{ent}")
  {

    var input_val = document.querySelector("#google_search_input").value;

    if(input_val==="dog")
    {
      var simp_key = document.getElementsByClassName('simple-keyboard');
      var google_first_window = document.getElementById('google');
      var google_second_window = document.getElementById('google_second_window');

      simp_key[0].style.display = 'none';

      google_first_window.style.display = 'none';
      google_second_window.style.display = 'block';
      alert.innerHTML = data[0]['steps'][index];
      alert.style.display = 'block';
      
    }
    else{
      index -= 1;

      alert.innerHTML = data[0]['err'] + data[0]['steps'][index];
      alert.style.display = 'block';
      index +=1;
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
    
    
    alert.innerHTML =  data[0]['steps'][index];
    alert.style.display = 'block';
    index+=1  
    var simp_key = document.getElementsByClassName('simple-keyboard');
    
    simp_key[0].style.display = 'block';
    

  }


function changeBG(category){
    var result = document.getElementById('main_search_result');
    if (category == 'img'){
      index += 1;
      alert.innerHTML = data[0]['steps'][index];
    alert.style.display = 'block';
      result.style.backgroundImage = 'url("png/google_search_img.png")'
    }
    else{
      result.style.backgroundImage = 'url("png/google_search_all.png")'
    }
  }
