<div class="list-of-casts">
	<div class="container">
		<h1>List of Pakistan Cities</h1>
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php foreach($cities_list as $value){ ?>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><a href="<?php echo base_url("search?city=".$value['city_name']); ?>"><?php echo $value['city_name']; ?><span></span></a></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>