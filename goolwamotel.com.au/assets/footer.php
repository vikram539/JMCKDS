<footer>

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">

				<div class="footer-logo">
							<?php
							$path = $website_images.$hotel_info_array['footer_logo'];
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
							?>
					<img src="<?=$base64; ?>" alt="<?=$property_name; ?>" title="<?=$property_name; ?>">

					<ul>

						<?php

							if($icon_exp[0]!='' && $facebook_link!='') echo"<li><a href='$facebook_link' target='_blank'>".$icon_exp[0]."&nbsp;</a></li>";

						?>

						<?php

							if($icon_exp[1]!='' && $google_plus!='') echo"<li><a href='$google_plus' target='_blank'>".$icon_exp[1]."&nbsp;</a></li>";

						?>

					</ul>

				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">

				<div class='footer-map'>

					<?=$hotel_info_array['hotel_map'];?>

				</div>

			</div>

			<div class="col-12">

				<div class='footer-menu'>

					<ul>

					<?php

					$_bottombar=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename",$where_clause="WHERE sub_menu_active!='y' and footer_active='1' ORDER BY page_order ASC");										

					while($run_bottombar=mysqli_fetch_array($_bottombar))

					{

						$_bottombar_name=$run_bottombar['page_name'];

						$_bottombar_filename=$run_bottombar['filename'];

						if($_bottombar_name=='index')

						{

							$_bottombar_name="home";

							$_bottombar_filename="";

						}

						echo"<li><span></span>&nbsp;<a href='".$website_domain.$_bottombar_filename."' title='$_bottombar_name'>$_bottombar_name</a></li>";

					}

					?>

					</ul>

				</div>

			</div>

			<div class="col-12">

				<p class='reserve'>&copy; Copyright&nbsp;<?=$hotel_info_array['hotel_created_year'];?>, <?=$hotel_info_array['hotel_name']?>. All Rights Reserved.</p>

			</div>

		</div>

	</div>

</footer> 

 

<script type="text/javascript" src="<?=$website_domain;?>js/all-js.js"></script>



<script type="text/javascript">

	

		var b247SearchBoxButtonText='Check Availability';

		var b247SearchBoxWidgetStyles='{"accent_color":"#e68f0f","date_text_color":"#6490dc","text_color":"#ffffff"}';

		var b247SearchBoxLayout='l';

		const b247PropertyId=<?=$bookingID;?>;

		const mainScript = document.createElement('script');

		mainScript.id="sbxScript";

		mainScript.type="text/javascript";

		

		mainScript.src='https://www.bookings247.com.au/widget/booking2searchbox/b247searchbox.js?property_id='+b247PropertyId+'&view='+b247SearchBoxLayout;

		const body = document.getElementsByTagName('body')[0];

		body.appendChild(mainScript);

    </script>
<script src="<?=$website_domain;?>owlcarousel/js/jquery.min.js"></script>
<script src="<?=$website_domain;?>owlcarousel/js/owl.carousel.js"></script>