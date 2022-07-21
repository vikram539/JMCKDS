<section class="pt-4 pb-4 mt-4 mb-4">
	<div class="container">
		<div class="row">
		<?php 
			$map_location_id=23;
			$map_location_h3=$fun_obj->TextArray($map_location_id, "h3");
			$map_location_h4=$fun_obj->TextArray($map_location_id, "h4");
			$map_location_p=$fun_obj->TextArray($map_location_id, "p");
			$map_location_li=$fun_obj->TextArray($map_location_id, "li");
		?>
			<div class="col-12 pt-4 pb-4 mt-4 mb-4">
				<div class="txt-formation">					
					<?php if($map_location_h3[0]!='') echo"<h2>".$map_location_h3[0]."</h2>";?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="map-location">
					<?php if($map_location_h4[0]!='') echo"<h4>".$map_location_h4[0]."</h4>";?>
					<?php if($map_location_p[0]!='') echo"<p class='text-left'>".$map_location_p[0]."</p>";?>
					<?php if($map_location_p[1]!='') echo"<p class='text-left'>".$map_location_p[1]."</p>";?>
					<ul>
					<?php 
					for($i=0; $i<count($map_location_li); $i++)
					{
						if($map_location_li[$i]!='') echo"<li><i class='fa fa-check' aria-hidden='true'></i><label>".$map_location_li[$i]."</label></li>";
					}
					?>
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>