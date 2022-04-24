let index = 1;
let data;
let alert = document.getElementById("alert");
let id = document.querySelector("#gmail_input");
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

    readTextFile("steps/email.json", function (text) {
        data = JSON.parse(text);
        alert.innerHTML = data[0]["steps"][index];
        console.log(data);
        alert.style.display = "block";
        index += 1;
    });

    let Keyboard = window.SimpleKeyboard.default;

    let keyboard = new Keyboard({
        onChange: (input) => onChange(input),
        onKeyPress: (button) => onKeyPress(button),
        mergeDisplay: true,
        layoutName: "default",
        layout: {
            default: [
                "q w e r t y u i o p",
                "a s d f g h j k l",
                "{shift} z x c v b n m {backspace}",
                "{numbers} {space} {ent}",
            ],
            shift: [
                "Q W E R T Y U I O P",
                "A S D F G H J K L",
                "{shift} Z X C V B N M {backspace}",
                "{numbers} {space} {ent}",
            ],
            numbers: ["1 2 3", "4 5 6", "7 8 9", "{abc} 0 {backspace}"],
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
            "{abc}": "ABC",
        },
    });

    /**
     * Update simple-keyboard when input is changed directly
     */
    document
        .querySelector("#gmail_input")
        .addEventListener("input", (event) => {
            keyboard.setInput(event.target.value);
        });

    document
        .querySelector("#gmail_password")
        .addEventListener("input", (event) => {
            keyboard.setInput(event.target.value);
        });
    document
        .querySelector("#gmail_day")
        .addEventListener("input", (event) => {
            keyboard.setInput(event.target.value);
        });
    document
        .querySelector("#gmail_year")
        .addEventListener("input", (event) => {
            keyboard.setInput(event.target.value);
        });


    console.log(keyboard);


$("body").click(function(e) {
    if (e.target.id == "gmail_input" || $(e.target).parents("#gmail_input").length) {
      id = document.querySelector('#gmail_input');
    }
    else if (e.target.id == "gmail_password" || $(e.target).parents("#gmail_password").length)
    {
        id = document.querySelector('#gmail_password');
        keyboard.clearInput();
        keyboard.clearInput();
    }
    else if (e.target.id == "gmail_day" || $(e.target).parents("#gmail_day").length)
    {
       id = document.querySelector('#gmail_day');
       keyboard.clearInput();
       
    } 
    else if (e.target.id == "gmail_year" || $(e.target).parents("#gmail_year").length)
    {
       id = document.querySelector('#gmail_year');
       keyboard.clearInput();
    } 
    else if (e.target.id == "gmail_phone" || $(e.target).parents("#gmail_phone").length)
    {
       id = document.querySelector('#gmail_phone');
       keyboard.clearInput();
    } 
    else if (e.target.className == "simple-keyboard" || $(e.target).parents(".simple-keyboard").length)
    {
       console.log('keyboard-working');
    } 
    else {
      close_searchbar();
    }
  });


    function onChange(input) {
        id.value = input;
        console.log("Input changed", input);
    }

    function onKeyPress(button) {
        console.log("Button pressed", button);

        /**
         * If you want to handle the shift and caps lock buttons
         */
        if (button === "{ent}") {
            var input_val = id.value;

            if (input_val === "") {
                var simp_key =
                    document.getElementsByClassName("simple-keyboard");
                var google_first_window = document.getElementById("google");
                var google_second_window = document.getElementById(
                    "google_second_window"
                );

                simp_key[0].style.display = "none";

                google_first_window.style.display = "none";
                google_second_window.style.display = "block";
                alert.innerHTML = data[0]["steps"][index];
                alert.style.display = "block";
            } else {
                index -= 1;

                alert.innerHTML = data[0]["err"] + data[0]["steps"][index];
                alert.style.display = "block";
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
            layoutName: shiftToggle,
        });
    }

    function handleNumbers() {
        let currentLayout = keyboard.options.layoutName;
        let numbersToggle = currentLayout !== "numbers" ? "numbers" : "default";

        keyboard.setOptions({
            layoutName: numbersToggle,
        });
    }
})();

function open_searchbar() {
    /*
    alert.innerHTML = data[0]["steps"][index];
    alert.style.display = "block";
    index += 1;
    console.log('Hi')
    */

    var simp_key = document.getElementsByClassName("simple-keyboard");

    simp_key[0].style.display = "block";
}



function close_searchbar() {
    var simp_key = document.getElementsByClassName("simple-keyboard");
    simp_key[0].style.display = "none";
}

function open_option(){
    var account = document.getElementsByClassName('select_account_type');
    account[0].style.display = 'block';        
}

function email_window(x){
        alert.innerHTML = data[0]["steps"][index];
    alert.style.display = "block";
    index += 1;

        for(i=1;i<=x;i++){
            console.log(i + '/' + x);
            if(i != x){
                try {
                document.getElementById('gmail_screen_' + i).style.display = 'none';
                continue;
                } catch (error) {
                    continue
                }
            }
            document.getElementById('gmail_screen_' + x).style.display = 'block';
        }
        
}