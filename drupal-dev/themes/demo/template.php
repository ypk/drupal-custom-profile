<?php
/**
 * Implements hook_tree_menu
 * 
 * used to customise menu
 * 
 * @param $variables
 * @return string
 */
function demo_menu_tree__main_menu($variables) {
	return '<ul class="nav navbar-nav navbar-right">' . $variables ['tree'] . '</ul>';
}

/**
 * Implements hook_menu_link
 * 
 * used to customise menu link items 
 * 
 * @param $variables
 * @return string
 */
function demo_menu_link(array $variables) {
	$element = $variables['element'];
	$sub_menu = '';

	if ($element['#below']) {
		$sub_menu = drupal_render($element['#below']);
	}
	$output = l($element['#title'], $element['#href'], $element['#localized_options']);
	return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
?>