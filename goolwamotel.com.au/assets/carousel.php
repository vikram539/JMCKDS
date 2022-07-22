<script src="<?=$website_domain;?>js/slider-27.5.0.min.js" type="text/javascript"></script>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1920px;height:600px;overflow:hidden;visibility:hidden;">

	<!-- Loading Screen -->
	<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
		<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?=$website_images;?>spin.svg" />
	</div>
	<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1920px;height:600px;overflow:hidden;">
		<?php
			$slider_ID=12;
			$galley_img_slider=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img^img_description","where page_id='$slider_ID' AND flag='1' ORDER BY img_order ASC");
			while($img_run_slider=mysqli_fetch_array($galley_img_slider))
			{
				$img_description=$img_run_slider['img_description'];
				$room_name_slider=str_replace(" ","-",strtolower(trim($img_run_slider['pagename'])));
				$img_path_slider=$website_images.$room_name_slider."/".$img_run_slider['small_img'];

		?>
		<div style="background-color:#000000;">
			<?php
				$path = $img_path_slider;
				$type = pathinfo($path, PATHINFO_EXTENSION);
				$data = file_get_contents($path);
				$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
				echo"<img data-u='image'  src='$base64' alt='$property_name' class='img-fluid' />";
			?>
			<div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
				<svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="1" style="left:-1300px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
					<text fill="#fafbfc" text-anchor="middle" x="700" y="72" class="text-uppercase caption-text"><?= $img_description; ?></text>
				</svg>
			</div>
		</div>
		<?php
			}
		?>
	</div>	
	<!-- Arrow Navigator -->
	<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
		<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
		</svg>
	</div>
	<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
		<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;"><polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
		</svg>
	</div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script><!-- #endregion Jssor Slider End -->