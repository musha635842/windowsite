<?php
/* @var $this WindowController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Windows',
);

$this->menu=array(
	array('label'=>'Create Window', 'url'=>array('create')),
	array('label'=>'Manage Window', 'url'=>array('admin')),
);
?>

<h1>Windows</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
