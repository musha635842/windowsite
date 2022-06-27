<?php
/* @var $this WindowController */
/* @var $model Window */

$this->breadcrumbs=array(
	'Windows'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Window', 'url'=>array('index')),
	array('label'=>'Create Window', 'url'=>array('create')),
	array('label'=>'Update Window', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Window', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Window', 'url'=>array('admin')),
);
?>

<h1>View Window #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'gauge',
		'request',
	),
)); ?>

<?php if (file_exists(dirname(__FILE__)."/../../../Window$model->id.js")) {
	 echo '<h1> Service program source: '.realpath(dirname(__FILE__)."/../../../Window$model->id.js").'</h1>';
	  } ?>
