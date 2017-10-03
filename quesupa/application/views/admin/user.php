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

 <!-- for jquery function  -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  


 <script type="text/javascript" charset="utf-8">
  $(document).ready(function(){  
      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/fetch_user'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });  
</script>
</head>


</head>



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
      <a class="navbar-brand" href="#">Services</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
     <ul class="nav navbar-nav navbar-right">
      <li><a href="newuser">Add New User</a></li>
    </ul>
    
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
<div class="container content">
  <div class="panel panel-default margin-bottom-40" style="padding: 20px">
    <div class="panel-heading"  style="margin-bottom: 10px">
    <h3 class="panel-title" style="text-align: center; ">User Details</h3>
    </div>
    <table id="myTable" class="display" cellspacing="0" width="80%" >
      <thead>
        <tr>
          <th>Sr. No</th>
          <th>Name</th>
          <th>Roll</th>
          <th>Email</th>
          <th>Status</th>
        
               <th>Action</th>
             </tr>
           </thead>
 <!--           <tbody>
            <?php foreach ($records as $record):?>
              <tr class="success">
                <td ></td>
                <td><?= $record->name ?></td>
                <td><?= $record->role ?></td>
                <td><?= $record->email ?></td>
                <td><?= $record->status ?></td>
           
                   <td>
                    <div class="row">
                      <div class="col-lg-6">
                        <?= anchor("admin/editUser/{$record->u_id}",'Edit',['class'=>'btn btn-primary']); ?>
                      </div>
                      <div class="col-lg-6">
                        <?=
                        form_open('admin/deleteUser'),
                        form_hidden('u_id', $record->u_id),
                        form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
                        form_close();

                        ?>
                      </div>
                    </div> 
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody> -->
          </table>
        </div>
      </div>


      <!-- Needed For Responsive-->
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>  -->
      <!--  For Responsive -->
      <script>
        $(function(){
          showAllUser();
          function showAllUser(){
            $.ajax({
              type: 'ajax',
              url: '<?php echo base_url() ?>admin/showAllUser',
              async: false,
              dataType: 'json',
              success: function(data){
                console.log(data);
              },
              error: function(){
                alert('error');
              }
            });
          }
        });
      </script>
    </body>
    </html>
