<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Статьи'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Менеджер статей', 'url'=>array('index')),
	array('label'=>'Создать статью', 'url'=>array('create')),
	array('label'=>'Обновить статью', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить статью', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены что хотите удалить эту статью?')),
);
?>

<h1>Просмотр статьи "<?php echo $model->title; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'category_id' => array(
			'name'  => 'category_id',
			'value' => $model->category->title,
		),
		'content',
		'posted_date',
		'status' => array(
			'name'  => 'status',
			'value' => ($model->status == 0) ? 'Нет' : 'Да',
		),
		'comment_status' => array(
			'name'  => 'comment_status',
			'value' => ($model->comment_status == 0) ? 'Запрещены' : 'Разрешены',
		),
	),
)); ?>