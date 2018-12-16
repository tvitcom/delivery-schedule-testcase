<?php
/* @var $this EquipageController */
/* @var $model Equipage */


$this->breadcrumbs = array(
    'Equipages' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Equipage', 'url' => array('index')),
    array('label' => 'Create Equipage', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#equipage-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Manage Equipages</h1>

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
    'id' => 'equipage-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'fio1',
        'fio2',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));

?>