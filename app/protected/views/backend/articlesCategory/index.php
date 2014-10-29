<?php
/* @var $this ArticlesCategoryController */
/* @var $model ArticlesCategory */

$this->breadcrumbs=array(
	'Категории Статей'=>array('index'),
	'Менеджер',
);

$this->menu=array(
	array('label'=>'Создать категорию для статей', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articles-category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Менеджер категорий статей</h1>

<p>
Вы также можете использовать операторы сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) в начале каждого из полей поиска.
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articles-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id' => array(
			'name' => 'id',
			'headerHtmlOptions' => array('width'=>30),
		),
		'title',
		'parent_id'=>array(
			'name' => 'parent_id',
			'value' => '$data->art_category->title',
			'filter' => ArticlesCategory::findAllParent(),
		),
		'status' => array(
			'name' => 'status',
			'value' => '$data->status == 1 ? "Опубликовано" : "Скрыто"',
			'filter' => array(0=>'Скрыто', 1=>'Опубликовано'),
		),
		array(
			'class'=>'CButtonColumn',
			'viewButtonOptions' => array('style' => 'display:none'),
		),
	),
)); ?>
