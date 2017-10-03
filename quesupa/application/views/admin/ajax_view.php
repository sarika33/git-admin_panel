<div class="container">
	<h3>Service Lists</h3>
	<div class="alert alert-success" style="display: none;">
		
	</div>
	<button id="btnAdd" class="btn btn-success">Add New</button>
	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
				<td>ID</td>
				<td>Service Name</td>
				<td>Description</td>
				<td>Status</td>
				<td>Created By</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody id="showdata">
			
		</tbody>
	</table>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	<form id="myForm" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="txtId" value="0">
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Service Name</label>
        			<div class="col-md-8">
        				<input type="text" name="txtServiceName" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="description" class="label-control col-md-4">Description</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtDescription"></textarea>
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="status" class="label-control col-md-4">Status</label>
        			<div class="col-md-8">
        				<input type="text" name="txtStatus" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="created_by" class="label-control col-md-4">Created By</label>
        			<div class="col-md-8">
        				<input type="text" name="txtCreatedBy" class="form-control">
        			</div>
        		</div>

        	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
        	Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	$(function(){
		showAllService();

		//Add New
		$('#btnAdd').click(function(){
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Add New Service');
			$('#myForm').attr('action', '<?php echo base_url() ?>service/addService');
			//The attr() method sets or returns attributes and values of the selected elements.
		});


		$('#btnSave').click(function(){
			var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
			//The serialize() method creates a URL encoded text string by serializing form values.
			//validate form
			var serviceName = $('input[name=txtServiceName]');
			var description = $('textarea[name=txtDescription]');
			var status = $('input[name=txtStatus]');
			var createdBy = $('input[name=txtCreatedBy]');
			var result = '';
			if(serviceName.val()==''){
				serviceName.parent().parent().addClass('has-error');
				//The parent() method returns the direct parent element of the selected element.
			}else{
				serviceName.parent().parent().removeClass('has-error');
				result +='1';
			}
			if(description.val()==''){
				description.parent().parent().addClass('has-error');
			}else{
				description.parent().parent().removeClass('has-error');
				result +='2';
			}
			if(createdBy.val()==''){
				createdBy.parent().parent().addClass('has-error');
			}else{
				createdBy.parent().parent().removeClass('has-error');
				result +='3';
			}
			if(status.val()==''){
				status.parent().parent().addClass('has-error');
			}else{
				status.parent().parent().removeClass('has-error');
				result +='4';
			}

			if(result=='1234'){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: url,
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#myModal').modal('hide');
							$('#myForm')[0].reset();
							
							if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}
							$('.alert-success').html('Service '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEmployee();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Could not add data');
					}
				});
			}
		});

		//edit
		$('#showdata').on('click', '.item-edit', function(){
			//The on() method attaches one or more event handlers for the selected elements and child elements.
			var id = $(this).attr('data');
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Edit Service');
			$('#myForm').attr('action', '<?php echo base_url() ?>service/updateService');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>service/editService',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=txtServiceName]').val(data.service_name);
					$('textarea[name=txtDescription]').val(data.description);
					$('input[name=txtStatus]').val(data.status);
					$('input[name=txtCreatedBy]').val(data.created_by);
					$('input[name=txtId]').val(data.s_id);
				},
				error: function(){
					alert('Could not Edit Data');
				}
			});
		});

		//delete- 
		$('#showdata').on('click', '.item-delete', function(){
			var id = $(this).attr('data');
			$('#deleteModal').modal('show');
			//prevent previous handler - unbind()
			$('#btnDelete').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'get',
					async: false,
					url: '<?php echo base_url() ?>service/deleteService',
					data:{id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Service Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllService();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Error deleting');
					}
				});
			});
		});



		//function
		function showAllService(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>service/showAllService',
				async: false,
				dataType: 'json',
				success: function(data){
					console.log(data);
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html +='<tr>'+
									'<td>'+data[i].s_id+'</td>'+
									'<td>'+data[i].service_name+'</td>'+
									'<td>'+data[i].description+'</td>'+
									'<td>'+data[i].status+'</td>'+
									'<td>'+data[i].created_by+'</td>'+
									'<td>'+
										'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].s_id+'">Edit</a>'+
										'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].s_id+'">Delete</a>'+
									'</td>'+
							    '</tr>';
					}
					$('#showdata').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
		}
	});
</script>