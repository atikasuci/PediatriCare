<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
  <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/login.css"/> 
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="row" style="margin-top:70px">
          <div class="col-md-6">
            <img src="assets/images/login/foto_login.png" width="450px" />
          </div>
          <div class="col-md-6">
              <ul class="text-center">
                <a>Member Login</a>
              </ul>

              <label class="label control-label">Username</label>
              <input type="username" class="form-control" id="username" placeholder="Username">

              <label class="label control-label">Password</label>
              <input type="username" class="form-control" id="password" placeholder="Password">

              <a href="#"><div class="btn btn-info">Login</div></a>

              <p class="text-center">Or </p>

              <div class="signup text-center">
                  <a href="<?= base_url('RegistController'); ?>">Sign Up</a>
              </div>

              <div class="back text-left">
                  <a class="btn btn-secondary btn-sm active" href="">back</a>
              </div>

              <form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
