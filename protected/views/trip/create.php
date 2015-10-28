<?php
/* @var $this TripController */
/* @var $model Trip */
/* @var $region Region */

?>

<h1>Create delivery to <?php echo $region->name; ?></h1>

<?php
$this->renderPartial('_form', array(
    'model' => $model,
    'region' => $region,
));

?>