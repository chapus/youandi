<?php

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|Roboto+Slab:300,400" rel="stylesheet" type="text/css">
	<?php
		echo $this->Html->meta('icon', $this->Html->url('/favicon.ico'));

		echo $this->Html->css('style1/style', '', array('media' => 'all') );
		
		echo $this->Html->script( array('style1/jquery.min') );
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="wrap" class="colorskin-0">
		<?php echo $this->element('header'); ?>

		<?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
        
        <?php echo $this->element('footer'); ?>
        
	</div>
	<?php //echo $this->element('sql_dump'); ?>
    <?php
	echo $this->Html->script(array(
		'style1/doubletaptogo',
		'style1/jquery.flexslider-min',
		'style1/bootstrap-alert',
		'style1/bootstrap-dropdown',
		'style1/bootstrap-tab',
		'style1/bootstrap-tooltip',
		'style1/florida-custom',
		'style1/jquery.prettyPhoto',
		'style1/jquery.sticky',
		'style1/jquery.easy-pie-chart'
	) );
	?>
</body>
</html>
