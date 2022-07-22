<?php
	$pageIDs=14;

	$checkin_time=$fun_obj->TextArray($pageIDs, "checkin_time");
	$checkout_time=$fun_obj->TextArray($pageIDs, "checkout_time");
	$reception_hours=$fun_obj->TextArray($pageIDs, "reception_hours");
	$after_hours=$fun_obj->TextArray($pageIDs, "after_hours");
	$rec_h4=$fun_obj->TextArray($pageIDs, "h4");

?>
<hr>
<div class='front-desk'>
	<?php if($rec_h4[0]!='') echo"<h4>".$rec_h4[0]."</h4>";?>
	<?php if($checkin_time[0]!='') echo"<p class='common-p'><strong>check-In : </strong>".$checkin_time[0]."</p>"; ?>
	<?php if($checkout_time[0]!='') echo"<p class='common-p'><strong>Check-Out : </strong>".$checkout_time[0]."</p>";?>
	<?php if($reception_hours[0]!='') echo"<p class='common-p'><strong>reception hours : </strong>".$reception_hours[0]."</p>";?>
	<?php //if($after_hours[0]!='') echo"<p class='common-p'><strong>after hours : </strong>".$after_hours[0]. $ph_exp[0]."</p>"; ?>
</div>