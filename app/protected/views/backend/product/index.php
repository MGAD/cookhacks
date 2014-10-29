<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Продукты'=>array('index'),
	'Менеджер',
);

$this->menu=array(
	array('label'=>'Добавить продукт', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Менеджер продуктов</h1>

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
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'category_id' => array(
			'name' => 'category_id',
			'value' => '$data->category->title',
			'filter' => ProductCategory::allCategories(),
		),
		'calories',
		'measure',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
