<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Продукты'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Менеджер продуктов', 'url'=>array('index')),
	array('label'=>'Создать продукт', 'url'=>array('create')),
	array('label'=>'Просмотр продукта', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Обновить продукт <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>