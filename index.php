<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hostel Management System</title>

    <meta charset="UTF-8" />
    <link href="web/css/style2.css" rel="stylesheet" type="text/css" />
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>
<body>
<h1>Hostel Management System</h1>
<div class="logmod">
  <div class="logmod__wrapper">
    <span class="logmod__close">Close</span>
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">STUDENT</a></li>
        <li data-tabtar="lgm-1"><a href="#">EMPLOYEE</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your Details <strong>to sign in</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="includes/login-hm.inc.php" class="simform" method="POST">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required" />
              </div>
              <div class="input full">
                <label class="string optional" for="user-name">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
              </div>
            </div>
            <div>
              <button class="button button1" type="sumbit" name="login-submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your Details <strong>to sign in</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="includes/login.inc.php" class="simform" method="POST">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Student Roll No</label>
                <input type="text" class="form-control" name="student_roll_no" placeholder="Roll No" required="required" />
              </div>
              <div class="input full">
                <label class="string optional" for="user-name">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
              </div>
            </div>
            <div>
              <button class="button button1" type="sumbit" name="login-submit">Submit</button>
              <p class=" w3l-register-p" style="color:#fc3955">Don't have an account?<a href="signup.php" class="register"> Sign up</a></p>
            </div>
          </form>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="JS/script.js"></script>
</body>
</html>
