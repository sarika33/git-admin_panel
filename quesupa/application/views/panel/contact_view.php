<div class="container">
	<h3>Contact Lists</h3>
	<div class="alert alert-success" style="display: none;">
		
	</div>
	<div class="col-lg-1 col-sm-3 col-xs-12">
	<button id="btnAdd" class="btn btn-block btn-success btn-rounded">Add New</button>
	</div>
	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
				<td width="2%" >Sr. No</td>
				<td width="10%">Name</td>
				<td width="10%">Email</td>
				<td width="10%">Message</td>
				<td width="10%">Acton</td>
				
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
        				<input type="text" name="txtName" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="description" class="label-control col-md-4">Email</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtEmail"></textarea>
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="description" class="label-control col-md-4">Message</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtMessage"></textarea>
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
		showAllContact();
$('#btnAdd').click(function(){
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Add New Contact');
			$('#myForm').attr('action', '<?php echo base_url() ?>service/addContact');
			//The attr() method sets or returns attributes and values of the selected elements.
		});
		$('#btnSave').click(function(){
			var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
			//The serialize() method creates a URL encoded text string by serializing form values.
			//validate form
			var name = $('input[name=txtName]');
			var email = $('textarea[name=txtEmail]');
			var message = $('textarea[name=txtMessage]');
			var result = '';
			if(name.val()==''){
				name.parent().parent().addClass('has-error');
				//The parent() method returns the direct parent element of the selected element.
			}else{
				name.parent().parent().removeClass('has-error');
				result +='1';
			}
			if(email.val()==''){
				email.parent().parent().addClass('has-error');
			}else{
				email.parent().parent().removeClass('has-error');
				result +='2';
			}
			if(message.val()==''){
				message.parent().parent().addClass('has-error');
			}else{
				message.parent().parent().removeClass('has-error');
				result +='3';
			}

			if(result=='123'){
			/*	$.ajax({
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
							$('.alert-success').html('Contact '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllContact();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Could not add data');
					}
				});*/
			}
		});
		//edit
		$('#showdata').on('click', '.item-edit', function(){
			//The on() method attaches one or more event handlers for the selected elements and child elements.
			var id = $(this).attr('data');
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Edit Contact');
			$('#myForm').attr('action', '<?php echo base_url() ?>service/updateContact');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>service/editContact',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=txtName]').val(data.name);
					$('textarea[name=txtEmail]').val(data.email);
					$('textarea[name=txtMessage]').val(data.message);
					$('input[name=txtId]').val(data.c_id);
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
					url: '<?php echo base_url() ?>service/deleteContact',
					data:{id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Contact Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllContact();
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
		function showAllContact(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>service/showAllContact',
				async: false,
				dataType: 'json',
				success: function(data){
					console.log(data);
					var html = '';
					var i;
					var j;
					for(i=0; i<data.length; i++){
						j= i+1;
						html +='<tr>'+
									'<td>'+j+'</td>'+
									'<td>'+data[i].name+'</td>'+
									'<td>'+data[i].email+'</td>'+
									'<td>'+data[i].message+'</td>'+
									'<td>'+
										'<a href="javascript:;" class="btn btn-info btn-rounded item-edit" data="'+data[i].c_id+'">Edit</a>'+
										'<a href="javascript:;" class="btn btn-danger btn-rounded item-delete" data="'+data[i].c_id+'">Delete</a>'+
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