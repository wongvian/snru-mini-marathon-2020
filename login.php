<?php
//session_start();

if (@$_SESSION['username_d'] <> "") {
  header('Location: list_regis_admin.php');
  exit();
}

include("functions.php");

// PHP goes here!

?>

    <!-- Header section  -->
<?php include("header.php") ?>

<div class="container center">
<div align="center">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">ผู้ดูแลระบบเข้าสู่ระบบ</h5>
            <form id="login-form" action="process.php?cmd=admin_login" method="post"   role="form" >
              <div class="form-label-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="ระบุ User Name" required autofocus>
                <label for="username">User Name</label>
              </div>

              <div class="form-label-group">
                <input type="password"  name="inputPassword" id="inputPassword" class="form-control" placeholder="inputPassword" required>
                <label for="inputPassword">Password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

    <!-- Footer section  -->
<?php include("footer.php") ?>