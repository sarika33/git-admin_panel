<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <?= link_tag('assets/css/bootstrap.min.css')?>
</head>

<body>
 <nav class="navbar navbar-inverse" style="background-color:#72c02c;">
  <div class="container-fluid" >
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color:white; margin-left: 640px" >Login</a>
    </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
    
  
    </div>
  </div>
</nav>


<div class="container">
<?php echo form_open("dashboard",['class'=>'form-horizontal', 'style'=>"border: 1px solid; padding: 10px; width:50%; margin-left:25%;",'name'=>'registration_form','id'=>'registration_form'])?>

  <fieldset>
    <legend style="text-align: center;">Admin Login</legend>

    <div class="form-group">
      <label class="col-lg-6 control-label">User Name</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="username" placeholder="User Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-6 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-4">
        <button type="reset" class="btn btn-default">Reset</button>
        <button type="submit" class="btn btn-primary" style="background-color:#72c02c;">Submit</button>
      </div>
    </div>
  </fieldset>

<?php echo form_close(); ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
