<?php
if (isset ( $variables )) {
	$path = drupal_get_path ( 'theme', 'demo' );
	$name = isset ( $variables ["title"] ) ? $variables ["title"] : "User";
	$bio = (! empty ( $variables ["field_cp_bio"] )) ? $variables ["field_cp_bio"] ["0"] ["value"] : "No Information Available!";
	$photo = (! empty ( $variables ["field_cp_picture"] )) ? file_create_url ( $variables ["field_cp_picture"] ["0"] ["uri"] ) : $path . "/img/noProfilePic.gif";
	$summary = (! empty ( $variables ["field_cp_bio"] )) ? $variables ["field_cp_bio"] ["0"] ["summary"] : "No Information Available!";
	$social_link = (! empty ( $variables ["field_cp_social_link"] )) ? $variables ["field_cp_social_link"] ["0"] ["value"] : "#";
}
?>

<div class="profile-container container">
	<div class="row action-row">
		<a class="action-link pull-right" href="/profile"><span class="glyphicon glyphicon-chevron-left direction-icon"></span>Back to Profiles</a>
	</div>
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4">
			<a class="profile-image" href="<?php print $photo;?>"><img src="<?php print $photo;?>" alt="<?php print $name; ?>" /></a>
		</div>
		<div class="col-xs-4 col-sm-8 col-md-8">
			<div class="row">
				<h1><?php print $name;?></h1>
			</div>
			<div class="row summary-row">
				<blockquote><?php print $summary;?></blockquote>
			</div>
			<div class="row bio-row">
				<h3><?php print $bio;?></h3>
			</div>
			<div class="row link-row">
				<a class="btn btn-default" href="<?php print $social_link;?>">Let's
					Talk<span class="btn-icon glyphicon glyphicon-comment"></span>
				</a>
			</div>
		</div>
	</div>
</div>
