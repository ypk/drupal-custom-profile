<div class="media-container container">
	<div class="row">
	<?php
		if(isset($variables["profile"]) && (!empty($variables["profile"]))){
			$profiles = $variables["profile"];
			print  '<ul class="media-list">';
			foreach($profiles as $key=>$profile){
				$name = $profile['full_name'];
				$link = generateURL($name);  
				print  '<li class="media">';
				print  '<a class="pull-left" href="'.$profile['picture'].'">';
				print  '<img class="media-object profile-thumb" src="'.$profile['picture'].'" alt="'.$name.'">';
				print  '</a>';
				print  '<div class="media-body">';
				print  '<h4 class="media-heading">'.$name.'</h4>';
				print  '<div class="container">';
				print  '<div class="row">';
				print  $profile['summary'];
				print  '</div>';
				print  '<div class="row">';
				print  '<a href="/profile'.$link.'" class="btn btn-info">Read More</a>';
				print  '</div>';
				print  '</div>';
				print  '</div>';
				print  '</li>';
			}
			print  '</ul>';
		}
	?>
	</div>
</div>
	

