<?php /* @var $this Controller */
	Yii::app()->bootstrap->register();






Yii::import('ext.gmap.*');

function mapa()
{
    $gMap = new EGMap();

    $gMap->setWidth(512);
// it can also be called $gMap->height = 400;
    $gMap->setHeight(400);
    $gMap->zoom = 8;

// set center to inca
    $gMap->setCenter(39.719588117933185, 2.9087440013885635);

// my house when i was a kid
    $home = new EGMapCoord(39.720991014764536, 2.911801719665541);

// my ex-school
    $school = new EGMapCoord(39.719456079114956, 2.8979293346405166);


// Initialize GMapDirection
    $direction = new EGMapDirection($home, $school);

    $direction->optimizeWaypoints = true;
    $direction->provideRouteAlternatives = true;

    $renderer = new EGMapDirectionRenderer();
    $renderer->draggable = false;
    $renderer->panel = "direction_pane";
    $renderer->setPolylineOptions(array('strokeColor' => '#FFAA00'));

    $direction->setRenderer($renderer);

    $gMap->addDirection($direction);

    $gMap->renderMap();

}









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

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>


</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
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
		<?php /*echo Yii::powered(); */?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
 </script>