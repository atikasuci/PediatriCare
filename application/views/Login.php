<html>
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/login.css">
    <!------ Include the above in your HEAD tag ---------->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
              <img src="assets/images/login/foto_login.png" width="500px">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Member Login</h5>
              <form class="form-signin" >
                <div class="form-group">
                  <input type="username" class="form-control" id="inputUsername" placeholder="Username">
                </div>

                <div class="form-group" >
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary" >Login</button>

                <br>
                  <p>or</p>
                </br>

                <div class="signup">
                  <a href="<?= base_url('RegistController'); ?>">Sign Up</a>
                </div>

                <div class="text-left">
                  <a class="btn btn-secondary btn-sm active" href="">back</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

  
   
