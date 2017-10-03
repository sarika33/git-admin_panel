
<!DOCTYPE html>
<html>
<head>
  <title>Edit Service</title>
  <?= link_tag('assets/css/bootstrap.min.css')?>
  <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
  <div class="container">
  <?php include('body.php'); ?>
    <?php echo form_open("admin/updateService/{$service->s_id}", ['class'=>'form-horizontal']);
  // echo form_hidden('article_id',$article->id)
    ?>
    <fieldset>
      <legend>Edit Service</legend>
      
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Service Name</label>
            <div class="col-lg-8">
              <?php echo form_input(['name'=>'service_name','class'=>'form-control','placeholder'=>'Service Name','value'=>set_value('service_name', $service->service_name)]); ?>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Description</label>
            <div class="col-lg-8">
              <?php echo form_textarea(['name'=>'description','class'=>'form-control','placeholder'=>'Description','value'=> set_value('description',$service->description),'rows'=>'4','cols'=>'10']) ?>
            </div>
          </div>
        </div>
        
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Status</label>
            <div class="col-lg-8">
                 <?php if($service->status =1){
              $q ="Active";
              }else{
                 $q ="Not Active";
              }
             ?>
            <select name="status" class='form-control'>
               <option value="<?php echo $service->status ?>"><?php echo $q ?></option>
    <option value="1">Active</option>
    <option value="0">Inactive</option>
  
    </select>
            </div>
          </div>
        </div>
        
      </div>

      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">

          <?php 
          echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']),
          form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);
          ?>
        </div>
      </div>
    </fieldset>
  </form>
</div>


</body>
</html>

