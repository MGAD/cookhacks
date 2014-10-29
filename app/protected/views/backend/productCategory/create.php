<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */

$this->breadcrumbs=array(
	'Категории продуктов'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Менеджер категорий продуктов', 'url'=>array('index')),
);
?>

<h1>Создать категорию продуктов</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>