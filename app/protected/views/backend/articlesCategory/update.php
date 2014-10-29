<?php
/* @var $this ArticlesCategoryController */
/* @var $model ArticlesCategory */

$this->breadcrumbs=array(
	'Категории статей'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Менеджер категорий статей', 'url'=>array('index')),
	array('label'=>'Создать категорию для статей', 'url'=>array('create')),
	array('label'=>'Просмотр категорий статей', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Обновить категорию статей "<?php echo $model->title; ?>"</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>