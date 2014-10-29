<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */

$this->breadcrumbs=array(
	'Категории продуктов'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Менеджер категорий продуктов', 'url'=>array('index')),
	array('label'=>'Создать Категории продуктов', 'url'=>array('create')),
	array('label'=>'Обновить Категории продуктов', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Категории продуктов', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены что хотите удалить это безвозвратно?')),
);
?>

<h1>Просмотр Категории продуктов "<?php echo $model->title; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'parent_id' => array(
			'name'  => 'parent_id',
			'value' => ProductCategory::findParent($model->parent_id),
		),
	),
)); ?>
