
<?php

include('login-script.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
  <script>
    function formvalid() {
      var vaildpass = document.getElementById("pass").value;

      if (vaildpass.length <= 5 || vaildpass.length >= 20) {
        document.getElementById("vaild-pass").innerHTML = "Minimum 5 characters";
        return false;
      } else {
        document.getElementById("vaild-pass").innerHTML = "";
      }
    }

    function show() {
      var x = document.getElementById("pass");
      if (x.type === "password") {
        x.type = "text";
        document.getElementById("showimg").src =
          "https://static.thenounproject.com/png/777494-200.png";
      } else {
        x.type = "password";
        document.getElementById("showimg").src =
          "https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png";
      }
    }
</script>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message bo
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

  </head>
  <body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="" method="post">
                <h2>SIGN IN TO YOUR ACCOUNT</h2>
                <input type="text" required placeholder="Email ID" name="femail" id="user" autocomplete="off" />
                <input oninput="return formvalid()" name="fpass" type="password" required placeholder="Password" id="pass" autocomplete="off" />
                <img src="https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png"
                    onclick="show()" id="showimg">
                <span id="vaild-pass"></span>
                <button type="submit">SIGN IN</button>
                <p class="message"><a href="1.php">Create an account</a></p>
            </form>
        </div>
    </div>
  </body>
</html>
