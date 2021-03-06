<?php

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>

	<link rel="apple-touch-icon" sizes="57x57" href="<?= $this->Html->url('/favicon/apple-icon-57x57.png'); ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= $this->Html->url('/favicon/apple-icon-60x60.png'); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= $this->Html->url('/favicon/apple-icon-72x72.png'); ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= $this->Html->url('/favicon/apple-icon-76x76.png'); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $this->Html->url('/favicon/apple-icon-114x114.png'); ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= $this->Html->url('/favicon/apple-icon-120x120.png'); ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= $this->Html->url('/favicon/apple-icon-144x144.png'); ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= $this->Html->url('/favicon/apple-icon-152x152.png'); ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $this->Html->url('/favicon/apple-icon-180x180.png'); ?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?= $this->Html->url('/favicon/android-icon-192x192.png'); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $this->Html->url('/favicon/favicon-32x32.png'); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= $this->Html->url('/favicon/favicon-96x96.png'); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $this->Html->url('/favicon/favicon-16x16.png'); ?>">
	<link rel="manifest" href="<?= $this->Html->url('/favicon/manifest.json'); ?>">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?= $this->Html->url('/favicon/ms-icon-144x144.png'); ?>">
	<meta name="theme-color" content="#ffffff">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|Roboto+Slab:300,400" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon', $this->Html->url('/favicon/favicon.ico', true));

		echo $this->Html->css('style1/style', '', array('media' => 'all') );
		echo $this->Html->css('style1/custom');
		
		echo $this->Html->script( array('style1/jquery.min', 'style1/notify.min') );

		/* Usermgmt Plugin JS */
		echo $this->Html->script('/usermgmt/js/ajaxValidation.js?q='.QRDN);
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64405523-1', 'auto');
  ga('send', 'pageview');

</script>
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
