<?php
/* @var $this RelationtripsController */
/* @var $model Relationtrips */


$this->breadcrumbs = array(
    'Relationtrips' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Relationtrips', 'url' => array('index')),
    array('label' => 'Create Relationtrips', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#relationtrips-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Manage Relationtrips</h1>

    <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));

    ?>
</div><!-- search-form -->

<?php
$this->widget('\TbGridView', array(
    'id' => 'relationtrips-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'trip_id',
        'region_id',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));

?>