<section class="pt-4 pb-4 mt-4 mb-4">
	<div class="overflow-hidden">
		<div class="row">			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 position-relative">
				<?php 
					$thing_to_do_page_id = 6;
					$guest_facility_h2 = $fun_obj->TextArray($thing_to_do_page_id, "h2");
					$guest_facility_p=$fun_obj->TextArray($thing_to_do_page_id, "index_p");
				?>
				<div class="guest-features">
					<?php						
						$gallery_sel=$fun_obj->commonSelect_table("cms_gallery","gallery_id^pagename^small_img","where page_id='$thing_to_do_page_id' AND flag='1' and img_for_slider='1' order by img_order ASC");

						$run_gallery=mysqli_fetch_array($gallery_sel);
						$path = $website_images.str_replace(" ","-",strtolower(trim($run_gallery['pagename'])))."/".$run_gallery['small_img'];
						$type = pathinfo($path, PATHINFO_EXTENSION);
						$data = file_get_contents($path);
						$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
						echo"<img src='$base64' alt='".$run_gallery['pagename']."' class='img-fluid w-100' />";
					?>	

					<?php
						$facility_Pagename=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename^page_order^for_menu^flag","WHERE page_ID='$thing_to_do_page_id'");
						$facility_fetch_href=mysqli_fetch_array($facility_Pagename);
					?>	
				</div>
				<div class='things_wrapper'>
					<div class='container'>
						<div class="txt-formation mt-4">	
							<?php if($guest_facility_h2[0]!='') echo"<h2>".$guest_facility_h2[0]."</h2>";?>
						</div>
						<div class="guest-features">
							<?php if($guest_facility_p[0]!='') echo"<p class='text-left'>".$guest_facility_p[0]."</p>";?>						
							<a href="<?=$website_domain.$facility_fetch_href['filename']; ?>" title="" class="btn btn-danger">read more</a> 
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>