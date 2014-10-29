<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Статьи'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Менеджер Статей', 'url'=>array('index')),
);
?>

<h1>Создать статью</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>