let move_speed = 3,
grativy = 0.5;
let bird = document.querySelector(".bird");
let img = document.getElementById("bird-1");
let check = 1;

// getting bird element properties
let bird_props = bird.getBoundingClientRect();

// This method returns DOMReact -> top, right, bottom, left, x, y, width and height
let background = document.querySelector(".background").getBoundingClientRect();

let score_val = document.querySelector(".score_val");
let message = document.querySelector(".message");
let mcqBoard = document.querySelector(".mcqBoard");

let score_title = document.querySelector(".score_title");

let game_state = "Start";
img.style.display = "none";
message.classList.add("messageStyle");

document.addEventListener("keydown", (e) => {
  if (e.key == "Enter" && game_state != "Play") {
    document.querySelectorAll(".pipe_sprite").forEach((e) => {
      e.remove();
    });
    img.style.display = "block";
    bird.style.top = "40vh";
    game_state = "Play";
    message.innerHTML = "";
    score_title.innerHTML = "Score : ";
    score_val.innerHTML = "0";
    message.classList.remove("messageStyle");
    play();
  }
});
let mcqCount = 0;
const mcqs = [
  {
    question: "What is the strongest password",
    option: ["abc", "123", "hryt5%3739", "pass1"],
    answer: "hryt5%3739",
  },
  {
    question: "What is your x?",
    option: ["Manthan", "jay", "rushikesh", "Yash"],
    answer: "Manthan",
  },
  {
    question: "What is your t?",
    option: ["Manthan", "jay", "rushikesh", "Yash"],
    answer: "Manthan",
  },
];
const showPopUp = (data) => {
  let form = document.createElement("form");
  let question = document.createElement("h5");
  form.appendChild(question);
  question.textContent = data.question;

  let inputOption = document.createElement("button");
  inputOption.textContent = data.option[0];
  inputOption.dataset.value = data.option[0];
  inputOption.setAttribute("type", "button");
  inputOption.classList.add("options1");

  let inputOption2 = document.createElement("button");
  inputOption2.textContent = data.option[1];
  inputOption2.dataset.value = data.option[1];
  inputOption2.setAttribute("type", "button");
  inputOption2.classList.add("options2");

  let inputOption3 = document.createElement("button");
  inputOption3.textContent = data.option[2];
  inputOption3.dataset.value = data.option[2];
  inputOption3.setAttribute("type", "button");
  inputOption3.classList.add("options3");

  let inputOption4 = document.createElement("button");
  inputOption4.textContent = data.option[3];
  inputOption4.dataset.value = data.option[3];
  inputOption4.setAttribute("type", "button");
  inputOption4.classList.add("options4");

  form.appendChild(inputOption);
  form.appendChild(inputOption2);
  form.appendChild(inputOption3);
  form.appendChild(inputOption4);
  mcqBoard.appendChild(form);
  message.classList.add("messageStyle");

  document.getElementsByClassName("options1")[0].onclick = yash;
  document.getElementsByClassName("options2")[0].onclick = yash;
  document.getElementsByClassName("options3")[0].onclick = yash;
  document.getElementsByClassName("options4")[0].onclick = yash;
};
const yash = (data) => {
  if (mcqs[mcqCount - 1].answer == data.path[0].textContent) {
    console.log('Correct',mcqBoard.innerHTML);
    mcqBoard.innerHTML = "";
    move_speed = 2;
    grativy= 0.5;
    check += 1;
    play(); 
  } else {
    mcqBoard.innerHTML = "";
    message.innerHTML =
      "Game Over".fontcolor("red") + "<br>Press Enter To Restart";
  }
};

function play() {
  function move() {
    if (game_state != "Play") return;

    let pipe_sprite = document.querySelectorAll(".pipe_sprite");
    pipe_sprite.forEach((element) => {
      let pipe_sprite_props = element.getBoundingClientRect();
      bird_props = bird.getBoundingClientRect();

      if (pipe_sprite_props.right <= 0) {
        element.remove();
      } else {
        if (
          bird_props.left < pipe_sprite_props.left + pipe_sprite_props.width &&
          bird_props.left + bird_props.width > pipe_sprite_props.left &&
          bird_props.top < pipe_sprite_props.top + pipe_sprite_props.height &&
          bird_props.top + bird_props.height > pipe_sprite_props.top
        ) {
          game_state = "end";
          //   message.innerHTML =
          //     "Game Over".fontcolor("red") + "<br>Press Enter To Restart";
          //   message.classList.add("messageStyle");
          img.style.display = "none";
          return;
        } else {
          if (
            pipe_sprite_props.right < bird_props.left &&
            pipe_sprite_props.right + move_speed >= bird_props.left &&
            element.increase_score == "1"
          ) {
            check += 1;
            score_val.innerHTML = +score_val.innerHTML + 1;
            if (check%2 == 0){
              move_speed = 0;
              bird_dy = 0;
              grativy = 0;
              showPopUp(mcqs[mcqCount++]);
            }   
          }
          element.style.left = pipe_sprite_props.left - move_speed + "px";
        }
      }
    });
    requestAnimationFrame(move);
  }
  requestAnimationFrame(move);

  let bird_dy = 0;
  function apply_gravity() {
    if (game_state != "Play") return;
    bird_dy = bird_dy + grativy;
    document.addEventListener("keydown", (e) => {
      if (e.key == "ArrowUp" || e.key == " ") {
        img.src = "Bird.png";
        bird_dy = -7.6;
      }
    });

    document.addEventListener("keyup", (e) => {
      if (e.key == "ArrowUp" || e.key == " ") {
        img.src = "Bird.png";
      }
    });

    if (bird_props.top <= 0 || bird_props.bottom >= background.bottom) {
      game_state = "End";
      message.style.left = "28vw";
      window.location.reload();
      message.classList.remove("messageStyle");
      return;
    }
    bird.style.top = bird_props.top + bird_dy + "px";
    bird_props = bird.getBoundingClientRect();
    requestAnimationFrame(apply_gravity);
  }
  requestAnimationFrame(apply_gravity);

  let pipe_seperation = 0;

  let pipe_gap = 35;

  function create_pipe() {
    if (game_state != "Play") return;

    if (pipe_seperation > 115) {
      pipe_seperation = 0;

      let pipe_posi = Math.floor(Math.random() * 43) + 8;
      let pipe_sprite_inv = document.createElement("div");
      pipe_sprite_inv.className = "pipe_sprite";
      pipe_sprite_inv.style.top = pipe_posi - 70 + "vh";
      pipe_sprite_inv.style.left = "100vw";

      document.body.appendChild(pipe_sprite_inv);
      let pipe_sprite = document.createElement("div");
      pipe_sprite.className = "pipe_sprite";
      pipe_sprite.style.top = pipe_posi + pipe_gap + "vh";
      pipe_sprite.style.left = "100vw";
      pipe_sprite.increase_score = "1";

      document.body.appendChild(pipe_sprite);
    }
    pipe_seperation++;
    requestAnimationFrame(create_pipe);
  }
  requestAnimationFrame(create_pipe);
}
