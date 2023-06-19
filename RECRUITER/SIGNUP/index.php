<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="button.css " />
    <title>Recruiter Sign Up Page</title>
</head>
  <script>
    var check = function ()
    {
      if (document.getElementById("Password").value.length !== 0)
      {
        if ( document.getElementById("Password").value === document.getElementById("CPassword").value)
        {
          // document.getElementById("message").style.color = "#03e9f4";
          // document.getElementById("message").innerHTML = "Matching";
          document.getElementById("message").innerHTML = "";
        }
        else
        {
          document.getElementById("message").style.color = "#C62727";
          document.getElementById("message").innerHTML = "Not Matching";
        }
      }
    };
    function check_pass()
    {
      if (document.getElementById("Password").value.length !== 0)
      {
          if ( document.getElementById("Password").value === document.getElementById("CPassword").value)
          {
            document.getElementById("Submit").disabled = false;
          }
          else
          {
            document.getElementById("Submit").disabled = true;
          }
      }
    }
  </script>
  <body>
    <div class="signup-box">
      <h2>Sign Up</h2>
      <form action="process.php" method="POST" autocomplete="on">
        <div class="user-box">
          <input type="text" name="FName" required />
          <label> First Name </label>
        </div>
        <div class="user-box">
          <input type="text" name="LName" required="" />
          <label>Last Name</label>
        </div>
        <div class="user-box">
          <input type="email" name="Email" required />
          <label>Email</label>
        </div>
        <div class="user-box">
          <input type="tel" name="PhoneNo" required />
          <label>Phone Number</label>
        </div>
        <div class="user-box">
          <input
            type="text"
            name="CNIC"
            required
            pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}"
          />
          <label>CNIC</label>
        </div>
        <div class="user-box">
          <input
            type="text"
            name="Username"
            id="master"
            required
            oninput="CheckValidity();"
            pattern="^[a-z][a-z0-9.,$;]+$"
          />
          <label>Username</label>
        </div>
        <span id= UValidityText"></span>
        <div class="user-box">
          <input
            type="password"
            name="Password"
            required
            id="Password"
            onkeyup="check();"
            oninput="check_pass();"
            minlength="4"
          />
          <label>Password</label>
        </div>
        <div class="user-box">
          <input
            type="password"
            name="CPassword"
            required
            id="CPassword"
            onkeyup="check();"
            oninput="check_pass();"
            minlength="4"
          />
          <label> Confirm Password</label>
        </div>
        <span id="message"></span>
        <br />
        <a>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <button action="process.php" id="Submit">Sign Up</button>
        </a>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <button type="reset">Reset</button>
        </a>
      </form>
    </div>
  </body>
</html>
