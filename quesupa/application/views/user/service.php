<?php include_once('header.php'); ?>

<!--=== Interactive Slider ===-->
<div class="breadcrumbs-v3 img-v1 text-center">
	<div class="container">
		<h1>Service</h1>
		<!-- <p>Lorem Ipsum, you need to be sure</p> -->
	</div>
</div>
<!--=== End Interactive Slider ===-->

<!--=== Title v1 ===-->
<div class="container content-sm">
	<div class="title-v1 no-margin-bottom">
		<p class="no-margin-bottom">Quesup <strong>Creative</strong> technology company providing key digital services. <br>
			Focused on helping our clients to build a <strong>Successful</strong> business on web and mobile.</p>
		</div>
	</div>
	<!--=== End Title v1 ===-->


	<!--=== Our Skills ===-->
	<div class="container content-sm">


		<div class="row">
			<div class="col-md-4">
				<img class="img-responsive" src="<?php echo base_url().'./uploads/'.$service->image ?>" alt="1"/>
				</div>
				 <div class="col-md-8">
					<h2 class="font-light"><a href=""><?php echo $service->service_name?></a></h2>
					<p><?php echo $service->description ?></p>

				</div>

			
			
		</div><!--/end row-->
	</div>
	<!--=== End Our Skills ===-->

	<!--=== Owl Clients v1 ===-->
	<div class="container content-sm">
		<div class="headline"><h2>Our Clients</h2></div>
		<div class="owl-clients-v1">

			<div class="item">
				<img src="<?php echo SITE_URL ?> /assets/img/clients4/1.png" alt="">
			</div>
			<div class="item">
				<img src="<?php echo SITE_URL ?> /assets/img/clients4/2.png" alt="">
			</div>
			<div class="item">
				<img src="<?php echo SITE_URL ?> /assets/img/clients4/3.png" alt="">
			</div>
			<div class="item">
				<img src="<?php echo SITE_URL ?> /assets/img/clients4/4.png" alt="">
			</div>
			<div class="item">
				<img src="<?php echo SITE_URL ?> /assets/img/clients4/5.png" alt="">
			</div>
			<div class="item">
				<img src="<?php echo SITE_URL ?> /assets/img/clients4/6.png" alt="">
			</div>
			<div class="item">
				<img src="<?php echo SITE_URL ?> /assets/img/clients4/7.png" alt="">
			</div>
			<div class="item">
				<img src="<?php echo SITE_URL ?> /assets/img/clients4/8.png" alt="">
			</div>
			<div class="item">
				<img src="<?php echo SITE_URL ?> /assets/img/clients4/9.png" alt="">
			</div>
		</div>
	</div>
	<!--=== End Owl Clients v1 ===-->
	<?php include_once('footer.php'); ?>