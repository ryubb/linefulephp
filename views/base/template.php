<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php if (isset($title)): ?>
			<?php echo $title; ?>
		<?php else: ?>
			Line PHP
		<?php endif; ?>
	</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('base.css'); ?>
	<?php echo Asset::css('layout.css'); ?>
</head>
<body class="flex">
	<div class="base">
		<div class="header text-center">
			<p>Line PHP</p>
		</div>
		<div>
			<?php if(Auth::check()): ?>
				<?php echo View::foge('base/sidebar'); ?>
			<?php endif; ?>
			<?php echo $content; ?>
			</div>
		<div>
			<?php echo View::forge('base/footer'); ?>
		</div>
	</div>
</body>
</html>
