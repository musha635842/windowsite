<?php
/* @var $this WindowController */
/* @var $model Window */

$this->breadcrumbs=array(
	'Windows'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Window', 'url'=>array('index')),
	array('label'=>'Create Window', 'url'=>array('create')),
	array('label'=>'View Window', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Window', 'url'=>array('admin')),
);
?>

<h1>Update Window <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>