<Style>
.register-block{
    /* background: url(<?php echo base_url(); ?>assets/images/register/background.jpg) auto; */
    background-color : #007B9B;
    padding : 50px 0;
}
.banner-sec{background:url(<?php echo base_url(); ?>assets/images/register/foto.jpg)  no-repeat  bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px;}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.register-sec{padding: 50px 30px; position:relative;}

</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="register-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 register-sec">
		    <h2 class="text-center">Register Now</h2>
		    <form class="register-form">
        <br>
   <div class="form-group">
    <label for="exampleInputName1" class="text-uppercase">firstname</label>
    <input type="name" class="form-control" placeholder="">
  </div>
     <div class="form-group">
    <label for="exampleInputAddress1" class="text-uppercase">lastname</label>
    <input type="name2" class="form-control" placeholder="">
  </div>
     <div class="form-group">
    <label for="exampleInputAddress2" class="text-uppercase">username</label>
    <input type="username" class="form-control" placeholder="">
  </div>
     <div class="form-group">
    <label for="exampleInputEmail" class="text-uppercase">Email</label>
    <input type="email" class="form-control" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="">
  </div>
    <div class="form-check">
    <button type="submit" class="btn btn-register float-right">Submit</button>
  </div>
  <div class="text-right" auto>
        <a class="btn btn-secondary btn-sm active" href="<?= base_url('LoginController'); ?>">Login</a>
    </div>
</form>
		</div>
		<div class="col-md-8 banner-sec">
	</div>
</div>
</section>
