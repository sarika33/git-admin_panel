
<!DOCTYPE html>
<html>
<head>
  <title>Edit User</title>
  <?= link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>
  <div class="container">
    <?php echo form_open("admin/updateUser/{$user->u_id}", ['class'=>'form-horizontal']);
  // echo form_hidden('article_id',$article->id)
    ?>
    <fieldset>
      <legend>Edit User</legend>
      
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Name</label>
            <div class="col-lg-8">
              <?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Name','value'=>set_value('name', $user->name)]); ?>
            </div>
          </div>
        </div>
        
      </div>
      
           
 
        <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Role</label>
            <div class="col-lg-8">

             <select name="role" class='form-control' value=''  id='form_role'>
           <option></option>
    <option value="0">Developer</option>
    <option value="1">Designer</option>
    <option value="2">BPO</option>
    </select>
            
            </div>
          </div>
        </div>
 </div>
        
        <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Email</label>
            <div class="col-lg-8">
              <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email', $user->email)]); ?>
            </div>
          </div>
        </div>
 </div>
        
      
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Status</label>
            <div class="col-lg-8">
            <?php if($user->status =1){
              $q ="Active";
              }else{
                 $q ="Not Active";
              }
             ?>
              <select name="status" class='form-control' value="" id='form_status'>
           <option value=""><?php echo $q ?></option>
    <option value="0">Not Active</option>
    <option value="1">Active</option>
    </select>
      
            </div>
          </div>
        </div>
        
      </div>
      

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Updated by</label>
            <div class="col-lg-8">
              <?php echo form_input(['name'=>'update_by','class'=>'form-control','placeholder'=>'Updated by','value'=>set_value('update_by', $user->update_by)]); ?>
            </div>
          </div>
        </div>
        
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Updated on</label>
            <div class="col-lg-8">
              <?php echo form_input(['name'=>'update_on','class'=>'form-control','placeholder'=>'Updated on','value'=>set_value('update_on', $user->update_on)]); ?>
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

