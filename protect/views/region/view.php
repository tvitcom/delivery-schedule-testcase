<?php
/* @var $this RegionController */
/* @var $model Region */
?>

<h1>View Region #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'distance',
        'duration',
        'description',
        'pathway',
    ),
));
?>
