
<?php

include('create-script.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<script type="text/javascript">
function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    //sets error inside tag of id
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false
    var name = document.forms['myForm']["fname"].value;
    if (name.length<5){
        seterror("name", "*Length of name is too short");
        returnval = false;
    }

    if (name.length == 0){
        seterror("name", "*Length of name cannot be zero!");
        returnval = false;
    }

    var email = document.forms['myForm']["femail"].value;
    if (email.length>100){
        seterror("email", "*Email length is too long");
        returnval = false;
    }

    var phone = document.forms['myForm']["fphone"].value;
    if (phone.length != 10){
        seterror("phone", "*Phone number should be of 10 digits!");
        returnval = false;
    }

    var password = document.forms['myForm']["fpass"].value;
    if (password.length < 6){

        // Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
        seterror("pass", "*Password should be atleast 6 characters long!");
        returnval = false;
    }

    var cpassword = document.forms['myForm']["fcpass"].value;
    if (cpassword != password){
        seterror("cpass", "*Password and Confirm password should match!");
        returnval = false;
    }

    return returnval;
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300&display=swap');


        body {
          font-size: 20px;
          font-family: "Poppins", sans-serif;
        }

        form {
            width: 300px;
            background: #fff;
            padding: 15px 40px 40px;
            border: 1px solid #ccc;
            margin: 50px auto 0;
            border-radius: 5px;
        }
        .formdesign {
            font-size: 15px;

        }

        .formdesign input {
            width: 230px;
            padding: 12px 20px;
            border: 1px solid;
            margin: 14px;
            border-radius: 4px;
            font-size: 15px;
        }

        .formerror {
          size:50px;
            color: red;
        }


        label,input {
            display: inline-block;
            width: auto;
            padding-right: 15px;
        }
        input[type="submit"] {
          width: 300px;
            font-size:20px;
            height: 50px;
            background: #2C195D;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #000;
        }

</style>
  </head>
  <body>

    <body>
      <p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p>
        <form aciton="login.php" onsubmit="return validateForm()" method="post">
        <h1 align="center">Sign Up</h1>
            <div class="formdesign" id="name">
                Name: <br><input type="text" name="fname" required><br><span class="formerror"> </span>
            </div>

            <div class="formdesign" id="email">
                Email:<br> <input type="email" name="femail" required><br><span class="formerror"> </span>
            </div>

            <div class="formdesign" id="phone">
                Phone: <br><input type="phone" name="fphone" required><br><span class="formerror"></span>
            </div>

            <div class="formdesign" id="pass">
                Password:<br> <input type="password" name="fpass" required><br><span class="formerror"></span>
            </div>

            <div class="formdesign" id="cpass">
                Confirm Password:<br> <input type="password" name="fcpass" required><br><span class="formerror"></span>
            </div>

            <input class="but" type="submit" value="Submit" name="create">
            <br>
            <small class="text-dark">
                Have an account? <a href="login.php">Sign In</a>
            </small>
        </form>
    </body>

    </html>
  </body>
</html>
