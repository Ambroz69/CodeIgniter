
<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Adding new shift</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('shifts/create_shift', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Shift details ID:'); ?>

        <select class="form-control" name="shift_details_ID">
            <?php
            foreach($shift_details_ID as $row) {
                echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <?php echo form_label('Start date:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'start_date',
            'type' => 'date'
            //'placeholder' => 'Enter start date of shift'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('End date:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'end_date',
            'type' => 'date'
            //'placeholder' => 'Enter end date of shift'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>


    <div class="form-group pull-right">

        <?php
        $data = array(
            'class' => 'btn btn-success',
            'name' => 'submit',
            'value' => 'ADD'
        );
        ?>

        <?php echo form_submit($data); ?>
    </div>

    <div class="form-group pull-left">
        <a class="btn btn-danger" href='<?php echo base_url(); ?>shifts/index_shift'>Cancel</a>
    </div>

    <?php echo form_close(); ?>
</div>

<div class="col-xs-4">

</div>