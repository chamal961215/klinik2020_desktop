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
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                 <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                  </div>
                  <div class="text-center">
                      <?php
                      if(isset($_GET['registration']))
                      {
                        $reg_success = '<a class="small text-success">'.$_SESSION['success_notice'].'</a>';
                        echo $reg_success;
                      }
                      ?>
                  </div>
                  <form class="user" action="queries/login_user.php" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="email" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="login_user">Sign In</button>
                    <div class="text-center">
                      <?php
                      if(isset($_GET['login']))
                      {
                        $sign_error = '<a class="small text-danger">'.$_SESSION['error'].'</a>';
                        echo $sign_error;
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
