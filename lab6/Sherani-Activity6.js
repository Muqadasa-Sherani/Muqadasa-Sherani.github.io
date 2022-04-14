//var $ = document.getElementById("button");
var $ = function(id) { return document.getElementById(id); };
      var counter = 0;
      timeout = 500;
      level = 0;

      //when we click the button..
      function whenClicked() {
        counter++;

        //if level 6(last level) reached and the user wants to continue we reset everything and restart.
        if (timeout < 0 && confirm("Congrats! u finished the game.\nClick ok to start again.")) {
          timeout = 500;
          counter = 0;
        }

        if (counter == 3) {
            alert("You won!\nNext level: "+ (++level));
            counter = 0;
          //if button is clicked 3 times we decrement the timeout.
          timeout = timeout - 100;
        }

        $("score").innerHTML = "<h1>Score: "+ counter +"</h1>";
      }

      //change position when hovered on button.
      function randomPos() {
        $("button").style.marginLeft = Math.random() * 300 + "px";
        $("button").style.marginTop = Math.random() * 300 + "px";
      }

      //set timeout when hovering.
      function mouseOver() {
        setTimeout(randomPos, timeout);
      }