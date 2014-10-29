<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Статьи'=>array('index'),
	'Менеджер',
);

$this->menu=array(
	array('label'=>'Создать статью', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articles-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Менеджер статей</h1>

<p>
Вы также можете использовать операторы сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) в начале каждого из полей поиска.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id' => array(
			'name' => 'id',
			'headerHtmlOptions' => array('width'=>30),
		),
		'title',
		'category_id' => array(
			'name' => 'category_id',
			'value' => '$data->category->title',
			'filter' => ArticlesCategory::allCategories(),
		),
		'content',
		'posted_date',
		'status' => array(
			'name' => 'status',
			'value' => '$data->status == 1 ? "Опубликовано" : "Скрыто"',
			'filter' => array(0=>'Скрыто', 1=>'Опубликовано'),
		),
		/*
		'comment_status',
		*/
		array(
			'class'=>'CButtonColumn',
			'viewButtonUrl'=>'CHtml::normalizeUrl(array("/articles/view", "id"=>$data->id))',
		),
	),
)); ?>

