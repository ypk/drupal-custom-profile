<?php $url = $GLOBALS['base_url']; ?>
<body>
	<!-- Main Header -->
	<div class="navbar navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<?php  if ($logo): ?>
					<a class="navbar-brand" href="<?php print $url; ?>"
					title="<?php print t('Home'); ?>"> <img src="<?php print $logo; ?>"
					alt="<?php print t('Home'); ?>" class="header-logo"></img></a>
				<?php endif; ?>
			</div>
			<div class="collapse navbar-collapse">
				<?php print render($page['header']); ?>
			</div>
		</div>
	</div>
	<!-- Content -->
	<div class="container">
		<!-- Drupal Messages -->
		<?php if ($messages): ?>
		<div id="messages">
			<div class="well">
				<?php print $messages; ?>
			</div>
		</div>
		<?php endif; ?>
		<!-- Page Title -->
		<?php if ($title): ?>
		<h1><?php print $title; ?></h1>
		<?php endif; ?>	
		<div class="row">
			<!-- Drupal Highlighted Section -->
			<?php if ($page['highlighted']): ?>
			<div class="well">
				<?php print render($page['highlighted']); ?>
			</div>
			<?php endif; ?>
			<!-- Drupal Help -->
			<?php print render($page['help']); ?>
		</div>
		<!-- Content!! -->
		<?php if ($page['content']): ?>
			<?php print render($page['content']); ?>
		<?php endif; ?>
	</div>
	<!-- Footer -->
	<?php if ($page['footer']): ?>
	<div class="footer">
		<div class="container">
			<?php print render($page['footer']); ?>
		</div>
	</div>
	<?php endif; ?>
</body>