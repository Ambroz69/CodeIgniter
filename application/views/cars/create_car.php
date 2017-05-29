
<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Adding new car.</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('cars/create_car', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Licence plate:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'licence_plate',
            'placeholder' => 'Enter Licence plate (example: BA-178-CC)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Mileage:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'mileage',
            'placeholder' => 'Enter Mileage in KM (example: 51042)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('STK expiration date:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'vehicle_inspection_expiration',
            'type' => 'date',
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
        <a class="btn btn-danger" href='<?php echo base_url(); ?>cars/index'>Cancel</a>
    </div>

    <?php echo form_close(); ?>
</div>

<div class="col-xs-4">

</div>