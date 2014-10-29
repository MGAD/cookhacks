<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */

$this->breadcrumbs=array(
	'Категории продуктов'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Менеджер категорий продуктов', 'url'=>array('index')),
	array('label'=>'Создать категорию продуктов', 'url'=>array('create')),
	array('label'=>'Просмотр категории продуктов', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Обновить категорию продуктов "<?php echo $model->title; ?>"</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>