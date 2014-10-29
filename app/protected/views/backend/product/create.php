<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Продукты'=>array('index'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Менеджер продуктов', 'url'=>array('index')),
);
?>

<h1>Добавить продукт</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>