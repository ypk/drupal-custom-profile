<?php
if((isset($variables["footer_vars"])) && (!empty($variables["footer_vars"]))){
	$site_name = $variables["footer_vars"]["site_name"];
	print '<div class="row">';
	print '&copy;&nbsp;'.date('Y').',&nbsp;'.$site_name.'.&nbsp;All rights reserved.';
	print '</div>';
}else{
	print '<div class="row">';
	print '&copy;'.date('Y').'. All rights reserved.';
	print '</div>';
}	
?>

