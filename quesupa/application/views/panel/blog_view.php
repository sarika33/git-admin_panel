<div class="container">
	<h3>Blogs Lists</h3>
	<div class="alert alert-success" style="display: none;">
		
	</div>
	<div class="col-lg-1 col-sm-3 col-xs-12">
	<button id="btnAdd" class="btn btn-block btn-success btn-rounded">Add New</button>
	</div>
	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
				<td width="2%" >Sr. No</td>
				<td width="10%">Blog Name</td>
				<td width="10%">Description</td>
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
        			<label for="name" class="label-control col-md-4">Blog Name</label>
        			<div class="col-md-8">
        				<input type="text" name="txtBlogName" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="description" class="label-control col-md-4">Description</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtDescription"></textarea>
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="description" class="label-control col-md-4">Short Description</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtSDescription"></textarea>
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
		showAllBlog();

		//Add New
		$('#btnAdd').click(function(){
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Add New Blog');
			$('#myForm').attr('action', '<?php echo base_url() ?>service/addBlog');
			//The attr() method sets or returns attributes and values of the selected elements.
		});


		$('#btnSave').click(function(){
			var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
			//The serialize() method creates a URL encoded text string by serializing form values.
			//validate form
			var blogName = $('input[name=txtBlogName]');
			var description = $('textarea[name=txtDescription]');
			var sdescription = $('textarea[name=txtSDescription]');
			var status = $('input[name=txtStatus]');
			var createdBy = $('input[name=txtCreatedBy]');
			var result = '';
			if(blogName.val()==''){
				blogName.parent().parent().addClass('has-error');
				//The parent() method returns the direct parent element of the selected element.
			}else{
				blogName.parent().parent().removeClass('has-error');
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
			if(sdescription.val()==''){
				sdescription.parent().parent().addClass('has-error');
			}else{
				sdescription.parent().parent().removeClass('has-error');
				result +='5';
			}

			if(result=='12345'){
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
							$('.alert-success').html('Blog '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllBlog();
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
			$('#myModal').find('.modal-title').text('Edit Blog');
			$('#myForm').attr('action', '<?php echo base_url() ?>service/updateBlog');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>service/editBlog',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=txtBlogName]').val(data.blog_name);
					$('textarea[name=txtDescription]').val(data.description);
					$('textarea[name=txtSDescription]').val(data.s_description);
					$('input[name=txtStatus]').val(data.status);
					$('input[name=txtCreatedBy]').val(data.created_by);
					$('input[name=txtId]').val(data.b_id);
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
					url: '<?php echo base_url() ?>service/deleteBlog',
					data:{id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Blog Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllBlog();
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
		function showAllBlog(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>service/showAllBlog',
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
									'<td>'+data[i].blog_name+'</td>'+
									'<td>'+data[i].s_description+'</td>'+
									'<td>'+data[i].status+'</td>'+
									'<td>'+data[i].created_by+'</td>'+
									'<td>'+
										'<a href="javascript:;" class="btn btn-info btn-rounded item-edit" data="'+data[i].b_id+'">Edit</a>'+
										'<a href="javascript:;" class="btn btn-danger btn-rounded item-delete" data="'+data[i].b_id+'">Delete</a>'+
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