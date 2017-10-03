
<?php include_once('header.php'); ?>
<div class="slider-inner">
	<div id="da-slider" class="da-slider">
		<div class="da-slide">
			<h2><i>CLEAN &amp; FRESH</i> <br /> <i>FULLY RESPONSIVE</i> <br /> <i>DESIGN</i></h2>
			<p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
			<div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/1.png" alt=""></div>
		</div>
		<div class="da-slide">
			<h2><i>RESPONSIVE VIDEO</i> <br /> <i>SUPPORT AND</i> <br /> <i>MANY MORE</i></h2>
			<p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i></p>
			<div class="da-img">
				<iframe src="http://player.vimeo.com/video/47911018" width="530" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
		</div>
		<div class="da-slide">
			<h2><i>USING BEST WEB</i> <br /> <i>SOLUTIONS WITH</i> <br /> <i>HTML5/CSS3</i></h2>
			<p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
			<div class="da-img"><img src="assets/plugins/parallax-slider/img/html5andcss3.png" alt="image01" /></div>
		</div>
		<div class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>
		</div>
	</div>
</div>
<div class="purchase">
	<div class="container overflow-h">
		<div class="row">
			<div class="col-md-9 animated fadeInLeft">
				<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
			</div>
			<div class="col-md-3 btn-buy animated fadeInRight">
				<a href="#" class="btn-u btn-u-lg"><i class="fa fa-cloud-download"></i> Download Now</a>
			</div>
		</div>
	</div>
</div>
<div class="container content-sm">
	<div class="headline"><h2>Our Services</h2></div>

	<div class="row margin-bottom-20">
	  <?php 
	$max_loop=4;
	$count = 0;
	  foreach ($records as $record):
	  ?>

		<div class="col-md-3 col-sm-6">
			<div class="thumbnails thumbnail-style thumbnail-kenburn">
				<div class="thumbnail-img">
					<div class="overflow-hidden">
						<img class="img-responsive" src="<?php echo base_url().'./uploads/'.$record->image ?>" width="800" height="405" alt="Not Uploades">
					</div>
					<?= anchor("services1/{$record->s_id}",'read more +',['class'=>'btn-more hover-effect']); ?>
					<!-- <a class="btn-more hover-effect" href="admin/viewService">read more +</a> -->
				</div>
				<div class="caption">
					<h3><a class="hover-effect" href="#"><?php echo $record->service_name?></a></h3>
					<p><?php echo $record->s_description ?></p>
				</div>
			</div>
		</div>

		 <?php
		  $count++;
       if($count==$max_loop) break;
		  endforeach; 
		 ?>
	
	</div> 
	<div class="row margin-bottom-30">
		<div class="col-md-8 md-margin-bottom-40">
			<div class="headline"><h2>Welcome To Quesup</h2></div>
			<div class="row">
				<div class="col-sm-4">
					<img class="img-responsive margin-bottom-20" src="assets/img/main/img18.jpg" alt="">
				</div>
				<div class="col-sm-8">
					<p>Quesup is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone.</p>
					<ul class="list-unstyled margin-bottom-20">
						<li><i class="fa fa-check color-green"></i> Donec id elit non mi porta gravida</li>
						<li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
						<li><i class="fa fa-check color-green"></i> Responsive Bootstrap Template</li>
						<li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
					</ul>
				</div>
			</div>
			<blockquote class="hero-unify">
				<p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why. Quesup is an incredibly beautiful responsive Bootstrap Template for corporate professionals.</p>
				<small>CEO, Jack Bour</small>
			</blockquote>
		</div>
		<div class="col-md-4">
			<div class="headline"><h2>Latest Shots</h2></div>
			<div id="myCarousel" class="carousel slide carousel-v1">
				<div class="carousel-inner">
					<div class="item active">
						<img src="assets/img/main/img4.jpg" alt="">
						<div class="carousel-caption">
							<p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
						</div>
					</div>
					<div class="item">
						<img src="assets/img/main/img2.jpg" alt="">
						<div class="carousel-caption">
							<p>Cras justo odio, dapibus ac facilisis into egestas.</p>
						</div>
					</div>
					<div class="item">
						<img src="assets/img/main/img24.jpg" alt="">
						<div class="carousel-caption">
							<p>Justo cras odio apibus ac afilisis lingestas de.</p>
						</div>
					</div>
				</div>
				<div class="carousel-arrow">
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
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
