  <!DOCTYPE html>
  <html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Welcome</title>
    <style>
     .error_form {
       font-size: 15px;
       font-family: Arial;
       color: #FF0052;
     }
   </style>
   <!--     For bootstrap css -->
   <?= link_tag('assets/css/bootstrap.min.css')?>
   <!-- for jquery function  -->
   <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
 </head>

 <script type="text/javascript">

  $(function() {

    $("#registration_form").submit(function() {

      var error_name = false;
      var error_role = false;
      var error_email = false;
      var error_password = false;
      var error_retype_password = false;
      var error_status= false;
      var error_created_by = false;

      var name_length = $("#form_name").val().length;
      var name_value = $("#form_name").val();
      var regex = /^[a-zA-Z ]*$/;
      if(name_length < 1) {
       $("#name_error_message").html("Should Not Empty");
       $("#name_error_message").show(); 
       error_name = true;
     } else {
      if (regex.test(name_value)) {
       $("#aname_error_message").hide();
     } else {
      $("#aname_error_message").html("Only Albhabets Allowed");
      $("#aname_error_message").show(); 
      error_name = true;
    }
    $("#name_error_message").hide();
  }

  var role_length = $("#form_role").val().length;
  if(role_length < 1) {
   $("#role_error_message").html("Should Not Empty");
   $("#role_error_message").show();      
   error_description = true;
 } else {
   $("#role_error_message").hide();
 }

 var email_length = $("#form_email").val().length;
 if(email_length < 1) {
   $("#email_error_message").html("Should Not Empty");
   $("#email_error_message").show();      
   error_description = true;
 } else {
   $("#email_error_message").hide();
 }

 var password_length = $("#form_password").val().length;
 if(password_length < 8) {
  $("#password_error_message").html("At least 8 characters");
  $("#password_error_message").show();
  error_password = true;
} else {
  $("#password_error_message").hide();
}
var password = $("#form_password").val();
var retype_password = $("#form_retype_password").val();
if(password !=  retype_password) {
  $("#retype_password_error_message").html("Passwords don't match");
  $("#retype_password_error_message").show();
  error_retype_password = true;
} else {
  $("#retype_password_error_message").hide();
}

var status_length = $("#form_status").val().length;
if(status_length < 1) {
 $("#status_error_message").html("Should Not Empty");
 $("#status_error_message").show();      
 error_status = true;
} else {
 $("#status_error_message").hide();
}
var created_by_length = $("#form_created_by").val().length;
if(created_by_length < 1) {
 $("#created_by_error_message").html("Should Not Empty");
 $("#created_by_error_message").show();      
 error_created_by = true;
} else {
 $("#created_by_error_message").hide();
}

if(error_name == false && error_role == false && error_email==false  && error_password  == false && error_status == false  && error_created_by == false && error_retype_password == false ) {
  return true;
} else {
  return false; 
}
});
  });
</script>

<body>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color:white; margin-left: 600px" >New User</a>
    </div>
  </div>
</nav>
<?php if( $feedback = $this->session->flashdata('feedback')): 
  $feedback_class = $this->session->flashdata('feedback_class');
  ?>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <div class="alert alert-dismissible <?= $feedback_class ?>">
        <?= $feedback ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="container">
  <?php echo form_open_multipart("user",['class'=>'form-horizontal', 'style'=>"border: 1px solid; padding: 10px;  width:50%; margin-left:25%;",'name'=>'registration_form','id'=>'registration_form'])?>
  <fieldset>
    <legend style="text-align: center;">New User</legend>
    
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label  class="col-lg-4 control-label">Name</label>
          <div class="col-lg-8">
           <?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Name','value'=>set_value('name'), 'id'=>"form_name"]); ?>
         </div>
       </div>
     </div>
     <div class="col-lg-6">
      <span class="error_form" id="name_error_message"></span>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label  class="col-lg-4 control-label">Role</label>
        <div class="col-lg-8">
          <select name="role" class='form-control' value='' id='form_role'>
           <option></option>
           <option value="0">Developer</option>
           <option value="1">Designer</option>
           <option value="2">BPO</option>
         </select>
         
       </div>
     </div>
   </div>
   <div class="col-lg-6">
    <span class="error_form" id="role_error_message"></span>
  </div>
</div>


<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label  class="col-lg-4 control-label">Email</label>
      <div class="col-lg-8">
       <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email'), 'id'=>"form_email"]); ?>
     </div>
   </div>
 </div>
 <div class="col-lg-6">
  <span class="error_form" id="email_error_message"></span>
</div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label  class="col-lg-4 control-label">Password</label>
      <div class="col-lg-8">
        <input type="password" class="form-control" id="form_password" name="upassword" placeholder="Password" >
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <span class="error_form" id="password_error_message"></span>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label  class="col-lg-4 control-label">Confirm Password</label>
      <div class="col-lg-8">
        <input type="password" class="form-control" id="form_retype_password" name="upassword" placeholder="Password" >
      </div>
    </div>
  </div>
  <div class="col-lg-6">
   <span class="error_form" id="retype_password_error_message"></span>
 </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label  class="col-lg-4 control-label">Status</label>
      <div class="col-lg-8">
       <select name="status" class='form-control' value='' id='form_status'>
         <option></option>
         <option value="0">Not Active</option>
         <option value="1">Active</option>
       </select>
       
     </div>
   </div>
 </div>
 <div class="col-lg-6">
  <span class="error_form" id="status_error_message"></span>
</div>
</div>

<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label  class="col-lg-4 control-label">Created by</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="form_created_by" name="created_by" placeholder="Created by" >
      </div>
    </div>
  </div>
  <div class="col-lg-6">
   <span class="error_form" id="created_by_error_message"></span>
 </div>
</div>
<div class="form-group">
  <div class="col-lg-10 col-lg-offset-2">
    <button type="reset" class="btn btn-default">Reset</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
<?php echo form_close(); ?>
</div>

<!-- Needed For Responsive-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<!--  For Responsive -->
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
