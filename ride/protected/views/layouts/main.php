<?php /* @var $this Controller */
	Yii::app()->bootstrap->register();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css">

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUIOfJqvnh-24yqyT0Ojt9S_6SF09gemE&sensor=true" type="text/javascript"></script>
	<script type="text/javascript"> 

   var map = new GMap(document.getElementById("map")); 
   map.setMapType(G_SATELLITE_TYPE); 
map.addControl(new GLargeMapControl()); 
   map.addControl(new GMapTypeControl()); 
map.centerAndZoom(new GPoint (-3.688788414001465, 40.41996541363825), 3); 

    </script> 
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body onload="initialize()">

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?> hola</div>
	</div><!-- header -->

	<div id="mainmenu-">
		<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions' => array('class' => 'nav nav-tabs'),
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Busqueda', 'url'=>array('/site/page', 'view'=>'busqueda')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'htmlOptions' => array('class' => 'breadcrumb'),
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Alex<br/>
		All Rights Reserved.<br/>
		<?php /*echo Yii::powered(); */?><div id="map" style="width: 400px; height: 300px"></div> 
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
