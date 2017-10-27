<?php $this->load->view('panel/header') ?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->


		    <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1" ></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner">
		    	<div class= "container timer">
		    		<div id="home" class= "logo text-center">
		    			<h1><?php echo lang('title'); ?></h1>
		   			</div>
		   			   <a href="english"><button type="button"><?php echo lang('translate'); ?></button></a>
			    	<div class= "row timer-circle">
			    		<div class= "main-text text-center">
			    			<h2 class="top-text"><?php echo lang('btitle'); ?></h2>
			    			<h2 class="sub-text"><?php echo lang('csoon'); ?></h2>
			    		</div>
			    		<div class="text-center">
							<div class="numbers" id="count2"></div>
						</div>
						<div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<div class= "circle text-center">
								<div class= "row" id= "spacer1">
									<div class= "title"></div>
									<div class= "numbers" id= "dday"></div>
								</div>
								<div class= "row" id= "spacer2">
									<div class= "title"></div>
									<div class= "title" id= "days"><?php echo lang('day'); ?></div>
								</div>
							</div>
							<div class= "circle text-center">
								<div class= "row" id= "spacer1">
									<div class= "title"></div>
									<div class= "numbers" id= "dhour"></div>
								</div>
								<div class= "row" id= "spacer2">
									<div class= "title"></div>
									<div class= "title" id= "hours"><?php echo lang('hr'); ?></div>
								</div>
							</div>
							<div class= "circle text-center">
								<div class= "row" id= "spacer1">
									<div class= "title"></div>
									<div class= "numbers" id= "dmin"></div>
								</div>
								<div class= "row" id= "spacer2">
									<div class= "title"></div>
									<div class= "title" id= "minutes"><?php echo lang('min'); ?></div>
								</div>
							</div>
							<div class= "circle text-center">
								<div class= "row" id= "spacer1">
									<div class= "title"></div>
									<div class= "numbers" id= "dsec"></div>
								</div>
								<div class= "row" id= "spacer2">
									<div class= "title"></div>
									<div class= "title" id= "seconds"><?php echo lang('sec'); ?></div>
								</div>
							</div>
						</div><!-- end of clock -->
			    	</div><!-- end of timer-circle -->
		    	</div><!-- end of timer -->
			    	
		        <div class="item active">
		        	<img src="img/summer.jpg" alt="First slide">
		        	
					<div class= "carousel-caption caption">
						<h1><?php echo lang('c1'); ?></h1>
					</div>
		        </div><!-- end of first item -->
		        <div class="item">
		          	<img src="img/rainy_season.jpg" alt="Second slide">
		          	
					<div class= "carousel-caption caption">
						<h1><?php echo lang('c2'); ?></h1>
					</div>
		        </div><!-- end of second item -->
		        <div class="item">
			        <img src="img/winter_season.jpg" alt="Third slide">
			        
					<div class= "carousel-caption caption">
						<h1><?php echo lang('c3'); ?></h1>
					</div>        
		        </div><!-- end of third item -->
		    </div>
		</div><!-- end of carousel -->

		<div class= "body-content">
			<!-- subscribe -->
			<div class= "container subscribe">
				<div class="row text-center">
					<div class= "col-lg-6 col-lg-offset-3 subscribe-text">
						<h3 class= "text-center"><?php echo lang('subscribe'); ?></h3>
						<hr class= "full">
	                	<p><?php echo lang('tag'); ?></p>
	                	<br/>
					</div>
				</div>
			</div><!-- end of subscribe -->
			<div class= "container after-slide">
				<div class= "row">
					<div class="col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12 text-center">
						<p class= "after-slide-text"><?php echo lang('tag1'); ?></p>
					</div>
				</div>
				<div class="subscribe-form" >
					<div class= "row">
						<div class="input-group margin-bottom-sm col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 text-center">
						  	<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
						  	<input class="form-control" type="text" placeholder="<?php echo lang('email'); ?>">
						</div>
						<div class="input-group col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 text-center form">
						  	<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
						  	<input class="form-control" type="password" placeholder="<?php echo lang('password'); ?>">
						</div>
						<div class="input-group margin-bottom-sm col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
							<button type="button" class="btn btn-info"><?php echo lang('subscribe'); ?></button>
						</div>
					</div>
				</div>
			</div><!-- end of after slide part -->

	        <!-- share part -->
	      	<div class="container share">
				<div class="row text-center">
					<div class= "col-lg-6 col-lg-offset-3 share-text">
						<h3 class= "text-center"><?php echo lang('connect'); ?></h3>
						<hr class= "full">
	                	<p><?php echo lang('tag3'); ?></p>
	                	<br/>
					</div>
				</div>
			</div>
			<div class= "container share-icons text-center">
				<div class= "row text-center">
					<div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<ul class="socials-icons col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Twitter" class="twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Google +" class="google-plus"><i class="fa fa-google-plus"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Instagram" class="instagram"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Connect with Skype" class="skype"><i class="fa fa-skype"></i></a>
							</li>
						</ul> 
					</div>
				</div>
			</div><!-- end of share part -->
	    </div><!-- end of body content -->
		<!-- footer -->
<?php $this->load->view('panel/footer') ?>