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

?>
<br />
<?php
echo CHtml::linkButton('NEW TRIP', array(
    'class' => 'btn btn-md btn-success',
    'href' => $this->createUrl('region/index'),
));

?>