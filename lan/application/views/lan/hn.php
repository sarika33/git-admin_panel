<?php $this->load->view('lan/header') ?>


<a href="english"><button type="button"><?php echo lang('translate');?> </button></a>

	<form action="" method="post" id="contactForm" name="sentMessage" class="sky-form contact-style">
						<fieldset class="no-padding">
							<label><?php echo lang('name');?> <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="name" class="form-control" required>
									</div>
								</div>
							</div>
<label><?php echo lang('email');?> <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="email" id="email" class="form-control">
									</div>
								</div>
							</div>

							<label><?php echo lang('phone');?><span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="phone" id="phone" class="form-control">
									</div>
								</div>
							</div>
							
							<label><?php echo lang('message');?> <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="8" name="message" id="message" class="form-control"></textarea>
									</div>
								</div>
							</div>

							<p><button type="submit" class="btn-u"><?php echo lang('smessage');?> </button></p>
						</fieldset>

					
					</form>
<?php $this->load->view('lan/footer') ?>