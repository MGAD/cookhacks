<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Статьи'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Обновление',
);

$this->menu=array(
	array('label'=>'Менеджер статей', 'url'=>array('index')),
	array('label'=>'Создать статью', 'url'=>array('create')),
	array('label'=>'Просмотр статьи', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Обновление статьи "<?php echo $model->title; ?>"</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>