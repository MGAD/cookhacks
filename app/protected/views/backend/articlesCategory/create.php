<?php
/* @var $this ArticlesCategoryController */
/* @var $model ArticlesCategory */

$this->breadcrumbs=array(
	'Категории статей'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Менеджер категорий статей', 'url'=>array('index')),
);
?>

<h1>Создать категорию для статей</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>