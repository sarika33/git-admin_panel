<div class="container">
	<h3>User Lists</h3>
	<div class="alert alert-success" style="display: none;">
		
	</div>
	<div class="col-lg-1 col-sm-3 col-xs-12">
		<button id="btnAdd" class="btn btn-block btn-success btn-rounded">Add New</button>
	</div>
	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
				<td width="2%" >Sr. No</td>
				<td width="10%">User Name</td>
				<td width="2%">Status</td>
				<td width="2%">Created By</td>
				<td width="10%">Action</td>
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
						<label for="name" class="label-control col-md-4">Name</label>
						<div class="col-md-8">
							<input type="text" name="txtUserName" class="form-control">
						</div>
					</div>
						<div class="form-group">
						<label for="name" class="label-control col-md-4">Email</label>
						<div class="col-md-8">
							<input type="text" name="txtEmail" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="label-control col-md-4">Password</label>
						<div class="col-md-8">
							<input type="password" name="txtPassword" class="form-control">
						</div>
					</div>
						<div class="form-group">
						<label for="name" class="label-control col-md-4">Confirm Password</label>
						<div class="col-md-8">
							<input type="password" name="txtCPassword" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="label-control col-md-4">Role</label>
						<div class="col-md-8">
									     <select name="txtRole" class="form-control">
          <option value="0">Developer</option>
    <option value="1">Designer</option>
    <option value="2">BPO</option>
        </select>
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="label-control col-md-4">Status</label>
						<div class="col-md-8">
										     <select name="txtStatus" class="form-control">
          <option value="1">Active</option>
          <option value="0">Inactive</option>
        </select>
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
				<div class="col-lg-5 col-sm-3 col-xs-12">
				</div>
				<div class="col-lg-3 col-sm-3 col-xs-12">
					<button type="button" class="btn btn-block btn-info btn-rounded" data-dismiss="modal">Close</button>
				</div>
				<div class="col-lg-3 col-sm-3 col-xs-12">
					<button type="button" id="btnSave" class="btn btn-block btn-success btn-rounded">Save changes</button>
				</div>
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
			 <div class="modal-footer">
        <div class="col-lg-5 col-sm-3 col-xs-12">
				</div>
				<div class="col-lg-3 col-sm-3 col-xs-12">
        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-12">
        <button type="button" id="btnDelete" class="btn btn-block btn-danger btn-rounded">Delete</button>
        </div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	$(function(){
		showAllUser();

		//Add New
		$('#btnAdd').click(function(){
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Add New  User');
			$('#myForm').attr('action', '<?php echo base_url() ?>service/addUser');
			//The attr() method sets or returns attributes and values of the selected elements.
		});


		$('#btnSave').click(function(){
			var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
			//The serialize() method creates a URL encoded text string by serializing form values.
			//validate form
			var userName = $('input[name=txtUserName]');
			var email = $('input[name=txtEmail]');
			var password = $('input[name=txtPassword]');
			var cpassword = $('input[name=txtCPassword]');
			var status = $('input[name=txtStatus]');
			var role = $('input[name=txtRole]');
			var createdBy = $('input[name=txtCreatedBy]');
			var result = '';
			if(userName.val()==''){
				userName.parent().parent().addClass('has-error');
				//The parent() method returns the direct parent element of the selected element.
			}else{
				userName.parent().parent().removeClass('has-error');
				result +='1';
			}
			
			if(createdBy.val()==''){
				createdBy.parent().parent().addClass('has-error');
			}else{
				createdBy.parent().parent().removeClass('has-error');
				result +='2';
			}
			if(status.val()==''){
				status.parent().parent().addClass('has-error');
			}else{
				status.parent().parent().removeClass('has-error');
				result +='3';
			}
			if(email.val()==''){
				email.parent().parent().addClass('has-error');
			}else{
				email.parent().parent().removeClass('has-error');
				result +='4';
			}
			if(role.val()==''){
				role.parent().parent().addClass('has-error');
			}else{
				role.parent().parent().removeClass('has-error');
				result +='5';
			}
			if(password.val()==''){
				password.parent().parent().addClass('has-error');
				//The parent() method returns the direct parent element of the selected element.
			}else{
				password.parent().parent().removeClass('has-error');
				result +='6';
			}
			if(cpassword.val()==''){
				cpassword.parent().parent().addClass('has-error');
				//The parent() method returns the direct parent element of the selected element.
			}else{
				cpassword.parent().parent().removeClass('has-error');
				result +='7';
			}
			if(result=='1234567' && password.val() == cpassword.val()){
			

		
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: url,
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
							console.log(password);
						if(response.success){
							$('#myModal').modal('hide');
							$('#myForm')[0].reset();
							
							if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}
							$('.alert-success').html('User '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllUser();
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
			$('#myModal').find('.modal-title').text('Edit user');
			$('#myForm').attr('action', '<?php echo base_url() ?>service/updateUser');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>service/editUser',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					console.log(data);
					$('input[name=txtUserName]').val(data.name);
					$('input[name=txtEmail]').val(data.email);
					$('input[name=txtRole]').val(data.role);
					$('input[name=txtStatus]').val(data.status);
					$('input[name=txtCreatedBy]').val(data.created_by);
					$('input[name=txtId]').val(data.u_id);
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
					url: '<?php echo base_url() ?>service/deleteUser',
					data:{id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('User Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllUser();
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
		function showAllUser(){

			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>service/showAllUser',
				async: false,
				dataType: 'json',
				success: function(data){
					console.log(data);
					var html = '';
					var i;
					for(i=0; i<data.length; i++){	
						var j= i+1;
						html +='<tr>'+
						'<td>'+j+'</td>'+
						'<td>'+data[i].name+'</td>'+
						'<td>'+data[i].status+'</td>'+
						'<td>'+data[i].created_by+'</td>'+
						'<td>'+
						'<a href="javascript:;" class="btn btn-info btn-rounded item-edit" data="'+data[i].u_id+'">Edit</a>'+
						'<a href="javascript:;" class="btn btn-danger  btn-rounded item-delete" data="'+data[i].u_id+'">Delete</a>'+
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