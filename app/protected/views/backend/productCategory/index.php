<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */

$this->breadcrumbs=array(
	'Категории продуктов'=>array('index'),
	'Менеджер',
);

$this->menu=array(
	array('label'=>'Создать категорию продуктов', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Менеджер категорий продуктов</h1>

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
	'id'=>'product-category-grid',
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
			'value' => '$data->prod_category->title',
			'filter' => ProductCategory::findAllParent(),
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
