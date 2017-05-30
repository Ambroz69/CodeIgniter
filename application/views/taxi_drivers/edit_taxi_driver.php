
<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Edit taxi driver</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('taxi_drivers/update_taxi_driver/'.$taxi_driver_data->ID.'', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('First Name:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'first_name',
            'placeholder' => 'Enter First Name',
            'value' => $taxi_driver_data->first_name
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Last Name:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'last_name',
            'placeholder' => 'Enter Last Name',
            'value' => $taxi_driver_data->last_name
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Phone Number:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'phone_number',
            'placeholder' => 'Enter phone number (example 0917066805)',
            'value' => $taxi_driver_data->phone_number
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Address:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'address',
            'placeholder' => 'Enter Address (example Jiraskova 22, Bardejov)',
            'value' => $taxi_driver_data->address
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Date of first day in work::'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'hired_date',
            'type' => 'date',
            //'placeholder' => 'Enter hired date (example: 2015-05-14)',
            'value' => $taxi_driver_data->hired_date
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Date of last day in work (leave empty if working):'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'fired_date',
            'type' => 'date',
            //'placeholder' => 'Enter fired date (example: 2015-07-17) - leave empty if still working',
            'value' => $taxi_driver_data->fired_date
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Driving licence number:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'driving_licence_number',
            'placeholder' => 'Enter Driving licence number (example: E01743104)',
            'value' => $taxi_driver_data->driving_licence_number
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Driving licence expiration:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'driving_licence_expiration',
            'type' => 'date',
            //'placeholder' => 'Enter date of expiration (example: 2024-01-15)',
            'value' => $taxi_driver_data->driving_licence_expiration
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Rating:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'rating',
            'placeholder' => 'Enter rating on scale of 1-10 (10 is the best)',
            'value' => $taxi_driver_data->rating
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

    <div class="form-group pull-left">
        <a class="btn btn-danger" href="javascript:history.back(1)">Cancel</a>
    </div>

    <?php echo form_close(); ?>
</div>

<div class="col-xs-4">

</div>