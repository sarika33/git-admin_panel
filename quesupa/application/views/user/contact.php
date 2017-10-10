<?php include_once('header.php'); ?>
<div class="breadcrumbs">
	<div class="container ">
		<h1 class="pull-left">Our Contacts</h1>
	</div>
</div>
<div class="row">
<div class="col-md-1" >
</div>
<div class="col-md-10" >
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59994.943853185476!2d73.72454123744161!3d19.979787730028676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeba0ca69e6d5%3A0xe16f195351b567d6!2sQuesup+Web+Solution+Pvt.Ltd!5e0!3m2!1sen!2sin!4v1507612776175" width="1150" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</div>
<div class="container content">
	<div class="row margin-bottom-30">
		<div class="col-md-9 mb-margin-bottom-30">
			<div class="headline"><h2>Contact Form</h2></div>
			<p></p><br />
<form id="myForm" action="" method="post" class="form-horizontal">
			
			<fieldset class="no-padding">
				<label>Name <span class="color-red">*</span></label>
				<div class="row sky-space-20">
					<div class="col-md-7 col-md-offset-0">
						<div>
							<input type="text" name="name" id="name" class="form-control" >
						</div>
					</div>
				</div>
				<label>Email <span class="color-red">*</span></label>
				<div class="row sky-space-20">
					<div class="col-md-7 col-md-offset-0">
						<div>
							<input type="text" name="email" id="email" class="form-control" >
						</div>
					</div>
				</div>
				<label>Message <span class="color-red">*</span></label>
				<div class="row sky-space-20">
					<div class="col-md-11 col-md-offset-0">
						<div>
							<textarea rows="8" name="message" id="message" class="form-control"></textarea>
						</div>
					</div>
				</div>
				<p><button id="btnSave" class="btn-u">Send Message</button></p>
			</fieldset>
		
			</form>
		</div>
		<div class="col-md-3">
			<div class="headline"><h2>Contacts</h2></div>
			<ul class="list-unstyled who margin-bottom-30">
				<li><a href="#"><i class="fa fa-home"></i>Padma Vishwas center<br />
					Above kabra Collection,<br />Sharanpur Road,Old Pandit <br />Colony,Nashik,Maharashtra  <br /></a></li>
					<li><a href="mailto:info.quesup@gmail.com"><i class="fa fa-envelope"></i>info.quesup@gmail.com</a></li>
					<li><a href="tel:02536600313"><i class="fa fa-phone"></i>02536600313</a></li>
					<li><a href="http://www.quesup.com" target="_blank"><i class="fa fa-globe"></i>http://www.quesup.com</a></li>
				</ul>
				<div class="headline"><h2>Business Hours</h2></div>
				<ul class="list-unstyled margin-bottom-30">
					<li><strong>Monday-Friday:</strong> 10am to 6pm</li>
					<li><strong>Sunday:</strong> Closed</li>
				</ul>
				<div class="headline"><h2>Why we are?</h2></div>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
				<ul class="list-unstyled">
					<li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
					<li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
					<li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
				</ul>
			</div>
		</div>
		<div class="headline"><h2>Our Clients</h2></div>
		<div class="owl-clients-v1">
			<div class="item">
				<img src="assets/img/clients4/1.png" alt="">
			</div>
			<div class="item">
				<img src="assets/img/clients4/2.png" alt="">
			</div>
			<div class="item">
				<img src="assets/img/clients4/3.png" alt="">
			</div>
			<div class="item">
				<img src="assets/img/clients4/4.png" alt="">
			</div>
			<div class="item">
				<img src="assets/img/clients4/5.png" alt="">
			</div>
			<div class="item">
				<img src="assets/img/clients4/6.png" alt="">
			</div>
			<div class="item">
				<img src="assets/img/clients4/7.png" alt="">
			</div>
			<div class="item">
				<img src="assets/img/clients4/8.png" alt="">
			</div>
			<div class="item">
				<img src="assets/img/clients4/9.png" alt="">
			</div>
		</div>
	</div>
	<?php include_once('footer.php'); ?>
	<script>
		$(function(){

			$('#btnSave').click(function(){
				var data = $('#myForm').serialize();
			//The serialize() method creates a URL encoded text string by serializing form values.
			//validate form
			var name = $('input[name=name]');
			var email = $('input[name=email]');
			var message = $('textarea[name=message]');
			var result = '';
			if(name.val()==''){
				name.parent().addClass('has-error');
				//The parent() method returns the direct parent element of the selected element.
			}else{
				name.parent().parent().removeClass('has-error');
				result +='1';
			}
		/*	if(email.val()==''){
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
			}*/
			if(result==1){
				alert('s');
			}

	/*		if(result=='1'){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: '<?php echo base_url() ?>service/contactForm',
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
						alert(responce.success);
						console.log(responce.success)
						if(response.success){
							$('#myForm')[0].reset();
							
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Could not add data');
					}
				});
			}*/
		});

		});
	</script>