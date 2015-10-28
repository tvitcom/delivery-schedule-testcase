<?php
/* @var $this TripController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Trips</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
