<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Продукты'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Менеджер продуктов', 'url'=>array('index')),
	array('label'=>'Создать продукт', 'url'=>array('create')),
	array('label'=>'Обновить продукт', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить продукт', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены что хотите удалить это безвозвратно?')),
);
?>

<h1>Просмотр продукта "<?php echo $model->title; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'category_id' => array(
			'name'  => 'category_id',
			'value' => $model->category->title,
		),
		'calories',
		'measure',
	),
)); ?>
