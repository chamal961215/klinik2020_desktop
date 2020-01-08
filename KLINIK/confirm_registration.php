<?php
include('includes/header.php');
?>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!--<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Fill The Blanks!</h1>
                  </div>
                  <form class="user" action="queries/confirm_new_user.php" method="post">
                 <?php
                      if(isset($_GET['enrollment_key']))
                      {
                        $email_input ='<div class="form-group row"><input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value='.$_GET['email'].' required></div>';
                        $enroll_key_input = '<div class="form-group row"><input type="text" class="form-control form-control-user" id="enroll_key" name="enroll_key" placeholder="Enrollment Key" value='.$_GET['enrollment_key'].' required></div>';
                        echo $email_input;
                        echo $enroll_key_input;
                      }else
                      {
                        $email_input ='<div class="form-group row"><input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" required></div>';
                        $enroll_key_input = '<div class="form-group row"><input type="text" class="form-control form-control-user" id="enroll_key" name="enroll_key" placeholder="Enrollment Key" required></div>';
                        echo $email_input;
                        echo $enroll_key_input;
                      }
                      ?>
                <div class="form-group row">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group row">
                    <input type="password" class="form-control form-control-user" id="confirm_Password" name="confirm_Password" placeholder="Confirm Password" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block " name="register_account" >Register Account</button>
                <div class="text-center">
                      <?php
                      if(isset($_GET['registration']))
                      {
                        $reg_error = '<a class="small text-danger">'.$_SESSION['error'].'</a>';
                        echo $reg_error;
                      }
                      ?>
                </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>


</html>

<?php
include('includes/scripts.php');
?>
