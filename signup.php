<!DOCTYPE html>
<html lang="en">
<head>
    <title>STUDENT SIGNUP</title>
    <meta charset="UTF-8" />
    <link href="web/css/style2.css" rel="stylesheet" type="text/css" />
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>
  <div class="logmod">
    <div class="logmod__wrapper">
      <span class="logmod__close">Close</span>
      <div class="logmod__container">
        <ul class="logmod__tabs">
          <li data-tabtar="lgm-1"></li>
        </ul>
        <div class="logmod__tab-wrapper">
        <div class="logmod__tab lgm-1">
          <div class="logmod__heading">
            <span class="logmod__heading-subtitle">Enter your <strong>Details</strong></span>
          </div>
          <div class="logmod__form">
            <form action="includes/signup.inc.php" method="POST" class="simform">
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-name">Student Roll No</label>
                  <input type="text" class="form-control" name="student_roll_no" placeholder="Roll No" required="required" />
                </div>
              </div>
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-name">First Name</label>
                  <input type="text" class="form-control" name="student_fname" placeholder="First Name" required="required" />
                </div>
              </div>
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-name">Second Name</label>
                  <input type="text" class="form-control" name="student_lname" placeholder="Last Name" required="required" />
                </div>
              </div>
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-name">Department</label>
                  <input list="Departments" class="form-control" name="department" placeholder="Department" required="required" />
                        <datalist id="Departments">
                        <option value="Information Technology">
                        <option value="Computer Science">
                        <option value="Mechanical">
                        <option value="Civil">
                        <option value="Electrical">
                        <option value="Electronics">
                        <option value="Safety and Fire">
                        </datalist>
                </div>
              </div>
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-name">Year of Study</label>
                  <input type="text" class="form-control" name="year_of_study" placeholder="Year of Study" required="required" />
                </div>
              </div>
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-name">Phone Number</label>
                  <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" required="required" />
                </div>
              </div>
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-name">PASSWORD</label>
                  <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
              </div>
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-name">CONFIRM PASSWORD</label>
                  <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password" required="required" />
                </div>
              </div>
              <div>
                 <button class="button button1" type="submit" name="signup-submit">Submit</button>
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
