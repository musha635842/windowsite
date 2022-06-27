<?php
/* @var $this WindowController */
/* @var $model Window */

$this->breadcrumbs=array(
	'Windows'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Window', 'url'=>array('index')),
	array('label'=>'Manage Window', 'url'=>array('admin')),
);
?>

<h1>Create Window</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>