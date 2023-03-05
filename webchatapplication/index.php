
<link rel="stylesheet" href="style/index.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<?php 
  session_start();
  if(isset($_SESSION['user_unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Web Chat Application</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>


        <div class="name-details">
          <div class="field input">
            <div class = "row">
              <div class = "col-6">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class = "col-6">
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
      </div>

        <div class="field input">
          <div class = "row">
              <div class = "col-12">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
      </div>
    </div>

        <div class="field input">
          <div class = "row">
              <div class = "col-12">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
      </div>
    </div>

        <div class="field image">
          <div class = "row">
              <div class = "col-12">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
        </div>
      </div>
    </div>

        <div class="field button">
          <div class = "row">
              <div class = "col-12">
                <input type="submit" name="submit" value="Sign Up">
            </div>
          </div>
        </div>

      </form>
      <div class="link">Already have an account? <a href="login.php">Login now</a></div>
    </section>
  </div>
  

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>
</html>
