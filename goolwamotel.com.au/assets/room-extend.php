<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>

		.owl-nav button {

    position: absolute;

    top: 0;

    bottom: 0;

}



.owl-prev {

    right: 0;

}



.owl-next {

    left: 0;

}



.owl-nav button i {

    font-size: 25px;

    text-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

}

</style>

<section class="bg-light mb-4 mt-4 pt-4 pb-4">

<div class="container">

	<div class="row">

		<?php

		$accID=2;

		

		$room_sel=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename",$where_clause="WHERE flag='$accID' AND disable_dorpdown='1' ORDER BY page_order ASC");		

		while($room_run=mysqli_fetch_array($room_sel))

		{

			$childroom_id=$room_run['page_ID'];

			$childroom_page_name=$room_run['page_name'];

		

		$room_h2=$fun_obj->TextArray($childroom_id, "h2");

		$room_h3=$fun_obj->TextArray($childroom_id, "h3");	 

		$bed1=$fun_obj->TextArray($childroom_id, "bed1");		

		$bed2=$fun_obj->TextArray($childroom_id, "bed2");		

		$bed3=$fun_obj->TextArray($childroom_id, "bed3");	

		$room_h4=$fun_obj->TextArray($childroom_id, "h4");	

		$room_p=$fun_obj->TextArray($childroom_id, "p");	

		$room_li=$fun_obj->TextArray($childroom_id, "li");	

		$booking_btn=$fun_obj->TextArray($childroom_id, "book_now");		

		?>

		<div class="mb-4 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
			<div class='desc-wrap'>
			<div class="description mb-2">
				<?php 
					if($room_h2[0]!='') echo"<h2 class='text-left mb-0 text-capitalize' style='font-weight:500;'>".$room_h2[0]."</h2>";?>
				<?php 
					if($room_h3[0]!='') //echo"<h4 class='text-left text-capitalize'>".$room_h3[0].":";

					echo"<p class='text-capitalize mb-0 text-left'>";
					$icon_sel=$fun_obj->commonSelect_table("cms_hotel_facility_icons","hotel_facility_id^facility_name^facility_alt_name^facility_page_id^facility_img^flag","WHERE FIND_IN_SET('$childroom_id',facility_page_id)");

					while($icon_run=mysqli_fetch_array($icon_sel))
					{
						$facility_img[]=$icon_run['facility_img'];
					} 	
//print_r($facility_img);					

						if($bed1[0]!='')
						{
							$path=$website_images."facility-img-icons/".$facility_img[0];
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

							echo $bed1[0]."<img src='$base64' />";
						}	
						if($bed2[0]!='') 
						{
							$path=$website_images."facility-img-icons/".$facility_img[1];
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
							echo $bed2[0]."<img src='$base64' />";
						}		

						if($bed3[0]!='')
						{
							$path=$website_images."facility-img-icons/".$facility_img[2];
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

							echo $bed3[0]."<img src='$base64' />";
						}
					echo"</p></h4>";

				?>

				<?php if($room_h4[0]!='') echo"<h4 class='text-left'>".$room_h4[0]."</h4>";?>

				<?php if($room_h4[1]!='') echo"<hr><h4 class='text-left text-uppercase'>".$room_h4[1]."</h4><hr>";?>

				<ul class="d-flex list-unstyled flex-wrap mb-0">
				<?php 

					for($i=0; $i<count($room_li); $i++)

					{

						if($room_li[$i]!='') echo"<li><i class='fa fa-check-square-o' aria-hidden='true'></i>&nbsp;".$room_li[$i]."</li>";

					}

					?>

				</ul>

			</div>
			<div class="owle-photo mb-2"> 

				<div class="owl-carousel owl-theme">

					

						<?php

						$room_img_slider=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img^img_description","where page_id='$childroom_id' AND flag='1' and img_for_slider!='1' ORDER BY img_order ASC");

						

						while($slider_run=mysqli_fetch_array($room_img_slider))

						{

							$room_name_=str_replace(" ","-",strtolower(trim($slider_run['pagename'])));

							$img_path_=$website_images.$room_name_."/".$slider_run['small_img'];

							$path=$img_path_;
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

							echo"<div class='item'><img data-u='image' src='$base64' alt='$childroom_page_name' class='img-fluid' /></div>";

						}

						?>

					

				</div>

			</div>
			<div class="owl-btn">

				<a href="<?=$check_rates;?>" title="Check Rates" target="_blank">check rates</a>

				<a href="<?=$booking_btn[0];?>" target="_blank" title="Book Now">book now</a>

			</div>
			</div><!-- desc-wrap -->
		</div> 
		

		<?php

		}

		?>
	</div>

</div>

</section>



<script>

		$('.owl-carousel').owlCarousel({

		loop:true,

        items: 1,

        margin:10,

        autoplay: true,

        nav: true,

		navText: ["<i class='fa fa-chevron-right'></i>","<i class='fa fa-chevron-left'></i>"]

  

})

</script>