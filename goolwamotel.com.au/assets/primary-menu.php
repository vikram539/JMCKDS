<div class="sticky-header header-bg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="_topbar">
					<ul class='col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-10 pr-0'>
					<?php
					$_topbar=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename",$where_clause="WHERE secondary_menu='1' ORDER BY page_order ASC");										
					while($run_topbar=mysqli_fetch_array($_topbar))
					{
						$_topbar_name=$run_topbar['page_name'];
						$_topbar_filename=$run_topbar['filename']; 
						if($_topbar_name=='index')
						{
							$_topbar_name="home";
							$_topbar_filename="";
						}
						echo"<li><span></span>&nbsp;<a href='".$website_domain.$_topbar_filename."' title='$_topbar_name'>$_topbar_name</a></li>";
					}
					if($ph_exp[0]!='') echo"<li><i class='fa fa-phone' aria-hidden='true'></i><a href='tel:".$ph_exp[0]."'>".$ph_exp[0]."</a></li>";
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="top-primary-menu">
	
		<div class="container">
		<div class="row">
		<div class="col-12">
		<nav class="navbar navbar-dark navbar-expand-lg">
			<a href="<?=$website_domain;?>" class="navbar-brand">
				<img src="<?=$website_images.$hotel_info_array['header_logo']; ?>" alt="<?=$property_name; ?>" title="<?=$property_name; ?>">
				<!-- <span><b>A</b>dvance <b>M</b>otel <small>Wangaratta</small></span> -->
			</a>
		<button type="button" class="navbar-toggler" data-target="#navigation" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>
		</button>
					
		<div class="collapse navbar-collapse" id="navigation">
			<ul class="navbar-nav ml-auto primary-link">
			<?php											
			$main_menu=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename",$where_clause="WHERE for_menu='active' AND secondary_menu!='1' ORDER BY page_order ASC");									
				while($run_main_menu=mysqli_fetch_array($main_menu))
				{
					$P_name=$run_main_menu['page_name'];
					$file_name=$run_main_menu['filename'];
					$pageID=$run_main_menu['page_ID']; 
							
					if($pageID==$page_ID)
					{
						$actives='li-active';
					}
					echo"<li class='nav-link";
							if($pageID==$page_ID){ echo" li-active"; } 
							echo"' data-id='$pageID'><a href='$file_name' title=''>$P_name</a>";
					echo"</li>";					
				}
			?>
			<li class='nav-link booknow'><a href="<?=$check_rates;?>" target="_blank">book now</a></li>
			
			</ul>
		</div>
		</nav>
		</div>
		</div>
		</div>
		<!-- <div class="bookdirect"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&emsp;<span>COVID-19: Booking With Flexibility While Travelling Safely</span></div> -->
	</div>
</div>