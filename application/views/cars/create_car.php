
<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
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
            'placeholder' => 'Enter expiration date of STK (example 2018-08-27)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>


    <div class="form-group">

        <?php
        $data = array(
            'class' => 'btn btn-success',
            'name' => 'submit',
            'value' => 'ADD'
        );
        ?>

        <?php echo form_submit($data); ?>
    </div>

    <?php echo form_close(); ?>
</div>