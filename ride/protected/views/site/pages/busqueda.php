<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Busqueda';
$this->breadcrumbs=array(
    'Busqueda',
);
?>
<h1>Busqueda</h1>

<p>Realiza una busqueda de la ciudad donde te encuentras y/o a donde te diriges</p>
<form class="form-horizontal" action="#">
    <input type="text" placeholder="Origen">
    <input type="text" placeholder="Destino">
    <button class="btn btn-info">Buscar</button>
</form>
