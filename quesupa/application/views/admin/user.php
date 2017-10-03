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
 <!-- <?= link_tag('assets/css/bootstrap.min.css')?> -->
 <!-- for jquery function  -->
 <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
<!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script>
  $( function() {
    $( "#form_date" ).datepicker({ 
      dateFormat:  'yy-mm-dd',
      maxDate: 0,
      minDate: "-18y" });
  } );
</script> -->
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
      var t = $('#myTable').DataTable( {
          "columnDefs": [ {
              "searchable": false,
              "orderable": false,
              "targets": 0
          } ],
          "order": [[ 1, 'asc' ]]
      } );
 
      t.on( 'order.dt search.dt', function () {
          t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;
          } );
      } ).draw();
  } );
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
          <h3 class="panel-title" style="text-align: center; ">Employee Details</h3>
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
        <tbody>
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
        </tbody>
      </table>
    </div>
  </div>


<!-- Needed For Responsive-->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>  -->
<!--  For Responsive -->

</body>
</html>
