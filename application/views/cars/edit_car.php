
<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Edit car</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('cars/update_car/'.$car_data->ID.'', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Licence plate:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'licence_plate',
            'placeholder' => 'Enter Licence plate (example: BA-178-CC)',
            'value' => $car_data->licence_plate
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
            'placeholder' => 'Enter Mileage in KM (example: 51042)',
            'value' => $car_data->mileage
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
            'placeholder' => 'Enter expiration date of STK (example 2018-08-27)',
            'value' => $car_data->vehicle_inspection_expiration
        );
        ?>

        <?php echo form_input($data); ?>
    </div>


    <div class="form-group pull-right">

        <?php
        $data = array(
            'class' => 'btn btn-success',
            'name' => 'submit',
            'value' => 'UPDATE'
        );
        ?>

        <?php echo form_submit($data); ?>
    </div>

    <div class="form-group pull-right pull-left">
        <a class="btn btn-danger" href="javascript:history.back(1)">Cancel</a>
    </div>

    <?php echo form_close(); ?>
</div>

<div class="col-xs-4">

</div>