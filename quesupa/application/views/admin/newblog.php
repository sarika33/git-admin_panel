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

    var error_name = false;
    var error_description = false;
    var error_s_description = false;
    var error_status= false;
    var error_created_by = false;

    function check_name(){
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
}
function check_description(){
  var description_length = $("#form_description").val().length;
  if(description_length < 1) {
   $("#description_error_message").html("Should Not Empty");
   $("#description_error_message").show();      
   error_description = true;
 } else {
   $("#description_error_message").hide();
 }
}
function check_s_description(){
  var s_description_length = $("#form_s_description").val().length;
  if(s_description_length < 1) {
   $("#s_description_error_message").html("Should Not Empty");
   $("#s_description_error_message").show();      
   error_s_description = true;
 } else {
   $("#s_description_error_message").hide();
 }
}


function check_status(){
  var status_length = $("#form_status").val().length;
  if(status_length < 1) {
   $("#status_error_message").html("Should Not Empty");
   $("#status_error_message").show();      
   error_status = true;
 } else {
   $("#status_error_message").hide();
 }
}


function check_created_by(){
  var created_by_length = $("#form_created_by").val().length;
  if(created_by_length < 1) {
   $("#created_by_error_message").html("Should Not Empty");
   $("#created_by_error_message").show();      
   error_created_by = true;
 } else {
   $("#created_by_error_message").hide();
 }
}

$("#registration_form").submit(function() {
  error_name = false;                 
  error_description = false;
   error_s_description = false;
  error_status = false;
  error_created_by = false;
  
  check_name();                 
  check_description();
   check_s_description();
  check_status();
  check_created_by();

  if(error_name == false && error_description  == false && error_s_description  == false && error_status == false  && error_created_by == false ) {
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
      <a class="navbar-brand" style="color:white; margin-left: 600px" >New Service</a>
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
  <?php echo form_open_multipart("blog1",['class'=>'form-horizontal', 'style'=>"border: 1px solid; padding: 10px;  width:50%; margin-left:25%;",'name'=>'registration_form','id'=>'registration_form'])?>
  <fieldset>
    <legend style="text-align: center;">New Blog</legend>
    
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
       <span class="error_form" id="aname_error_message"></span>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label  class="col-lg-4 control-label">Image</label>
        <div class="col-lg-8">
          <?php echo form_upload(['name'=>'userfile','class'=>'form-control']); ?>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
     <?php  echo $error ?>
   </div>
 </div>

 <div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label  class="col-lg-4 control-label">Description</label>
      <div class="col-lg-8">
        <?php echo form_textarea(['name'=>'description','class'=>'form-control','placeholder'=>'Description','value'=>set_value('description'), 'id'=>"form_description",'rows'=>'4','cols'=>'10']); ?>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
   <span class="error_form" id="description_error_message"></span>
 </div>
</div>
 <div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label  class="col-lg-4 control-label">Short Description</label>
      <div class="col-lg-8">
        <?php echo form_textarea(['name'=>'s_description','class'=>'form-control','placeholder'=>'Short Description','value'=>set_value('s_description'), 'id'=>"form_s_description",'rows'=>'4','cols'=>'10']); ?>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
   <span class="error_form" id="s_description_error_message"></span>
 </div>
</div>

<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label  class="col-lg-4 control-label">Status</label>
      <div class="col-lg-8">
       
        <select name="status" class='form-control' id="form_status">
          
          <option value="1">Active</option>
          <option value="0">Inactive</option>
          
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
        <input type="text" class="form-control" id="form_created_by" name="created_by" placeholder="created_by" >
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
