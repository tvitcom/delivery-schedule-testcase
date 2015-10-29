<?php
/* @var $this TripController */
/* @var $model Trip */
/* @var $region Region */
$this->pageTitle = 'Create delivery to ' . $region->name;

?>

<div class="col-md-7">
    <br>
    <div class="register-item">
        <b>Creaing delivery to <?php echo $region->name; ?></b>
        <small class="text-muted">2222:OctOct 2015-10-28</small>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
    </div>
    <br>
    <div class="register-item">
        <b>How-To fill delivery form</b>
        <small class="text-muted">Jun 11, 2015 11:45:36 PM</small>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <blockquote>
            <b>Administrator</b><br>
            Neque porro quisquam est, <?php
            echo CHtml::ajaxLink(
                'What time is it?', // the link body (it will NOT be HTML-encoded.)
                array('trip/whattimeisit'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
                array(
                'update' => '#req_time'
                )
            );

            ?>

            <span id="req_time" class="well-sm">
                test ajax!
            </span>
            qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.                    </blockquote>
    </div>
    <br>
</div>
<div class="col-md-5">
    <h4>Delivery Form:</h4>
    <div class="well well-sm">
        <?php
        $this->renderPartial('_form', array(
            'model' => $model,
            'region' => $region,
        ));

        ?>
    </div>
</div><!-- Registration form -->
