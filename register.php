<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="register.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!--This is the javascript to check for password on the server-side -->
    <script>
        window.jQuery || document.write('<script src="http://mysite.com/jquery.min.js"><\/script>')
    </script>

    <script>
        function checkPasswordMatch() 
        {
        var password = $("#password").val();
        var confirmPassword = $("#confirmpassword").val();

        if (password != confirmPassword)
            $("#divCheckPasswordMatch").html("Passwords do not match!");
        else
         $("#divCheckPasswordMatch").html("Passwords match.");
        }

        jQuery(document).ready(function () 
        {
            $("#password, #confirmpassword").keyup(checkPasswordMatch);
        });
    </script>
</head>

<body>
<div id="topnav">
      <ul>
	      <li><a href="index.php" target="_balnk">Home</a></li>
	      <li><a href="history.php" target="_balnk">History</a></li>
	      <li><a href="rules.php" target="_balnk">Rule</a></li>
	      <li><a href="bio-page.php" target="_balnk">Meet the Developers</a></li>
	      <li><a href="contact-us.php" target="_balnk">Contact-us</a></li>
	      <li class="dropdown">
          <a href="#" class="dropbtn">External Links</a>
          <div class="dropdown-content">
            <a href="https://www.google.com/search?q=connect+4&rlz=1C1JZAP_enUS747US747&oq=connect+4+&aqs=chrome..69i57j69i59l2j0l5.3243j0j8&sourceid=chrome&ie=UTF-8" target="_blank">Link to Google search</a>
            <a href="https://www.mathsisfun.com/games/connect4.html" target="_blank">Link1 to Connect4 game</a>
            <a href="https://papergames.io/en/connect4" target="_blank">Link2 to Connect4 game</a>
            <a href="https://poki.com/en/g/connect-4" target="_blank">Link3 to Connect4 game</a>
          </div>
        </li>
        <li class="dropdown">
          <a href="#" class="dropbtn">Login/Register</a>
          <div class="dropdown-content">
            <a href="login.php" >Login</a>
            <a href="register.php">Register</a>
          </div>
        </li>
      </ul>
</div> 
    <div class="form-body">
        <form action = "registration.php" method = "POST" name = "register" >
            <label for="name">Full Name</label>
            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
            <label for="email">E-mail</label>
            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id = "password" placeholder="Password" required>
            <label for="confirmpassword">Confirm Password</label>
            <input class="form-control" type="password" name="confirmpassword" id = "confirmpassword" placeholder="Confirm Password" onChange = "checkPasswordMatch();" required >
            <div id = "divCheckPasswordMatch" style = "color: black;" ></div>
            <div class="form-button">
            <button id="submit" type="submit" name = "signup" class="ibtn">Register</button>
        </form>
    </div>
</body>

</html>
