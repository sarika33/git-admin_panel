<?php include_once('header.php'); ?>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Blog </h1>

	</div>
</div>
<div class="container content">

	<ul class="timeline-v1">
<?php 
$count = 0;
foreach ($records as $record):
	?>
			<?php $count++;
if($count%2!=0){?>
			<li>

				<div class="timeline-badge primary"><i class="glyphicon glyphicon-record"></i></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<img class="img-responsive" src="<?php echo base_url().'./uploads/'.$record->image ?>" alt="1"/>
					</div>
					<div class="timeline-body text-justify">
						<h2 class="font-light"><a href="#"><?php echo $record->service_name ?></a></h2>
						<p><?php echo $record->s_description ?></p>
							<?= anchor("services1/{$record->s_id}",'read more +',['class'=>'btn-u btn-u-sm']); ?>
					</div>
					<div class="timeline-footer">
						<ul class="list-unstyled list-inline blog-info">
							<li><i class="fa fa-clock-o"></i> <?php echo $record->created_on?></li>
							<li><i class="fa fa-comments-o"></i> <a href="#">7 Comments</a></li>
						</ul>
						<a class="likes" href="#"><i class="fa fa-heart"></i>239</a>
					</div>
				</div>
			</li>
		<?php }else{ ?>
			 <li class="timeline-inverted">
					<div class="timeline-badge primary"><i class="glyphicon glyphicon-record invert"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<img class="img-responsive" src="<?php echo base_url().'./uploads/'.$record->image ?>" alt=""/>
						</div>
						<div class="timeline-body text-justify">
							<h2 class="font-light"><a href="#"><?php echo $record->service_name?></a></h2>
							<p><?php echo $record->s_description ?></p>
							<?= anchor("services1/{$record->s_id}",'read more +',['class'=>'btn-u btn-u-sm']); ?>
						</div>
						<div class="timeline-footer">
							<ul class="list-unstyled list-inline blog-info">
								<li><i class="fa fa-clock-o"></i>  <?php echo $record->created_on?></li>
								<li><i class="fa fa-comments-o"></i> <a href="#">12 Comments</a></li>
							</ul>
							<a class="likes" href="#"><i class="fa fa-heart"></i>87</a>
						</div>
					</div>
				</li> 
				<?php }?>
				<?php
			
			endforeach; 
			?>
		<li class="clearfix" style="float: none;"></li>

	</ul>
</div>
		<div class="container content-sm">
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