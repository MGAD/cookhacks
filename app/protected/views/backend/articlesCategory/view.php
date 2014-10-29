<?php
/* @var $this ArticlesCategoryController */
/* @var $model ArticlesCategory */

$this->breadcrumbs=array(
	'Категории статей'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Менеджер категорий статей', 'url'=>array('index')),
	array('label'=>'Создать категорию для статей', 'url'=>array('create')),
	array('label'=>'Обновить категорию статей', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить категорию статей', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены что хотите удалить это безвозвратно?')),
);
?>

<h1>Просмотр категории статей "<?php echo $model->title; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'parent_id' => array(
			'name'  => 'parent_id',
			'value' => ArticlesCategory::findParent($model->parent_id),
		),
		'status' => array(
			'name'  => 'status',
			'value' => ($model->status == 0) ? 'Нет' : 'Да',
		),
	),
)); ?>
