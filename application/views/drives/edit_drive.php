
<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Edit ride</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('drives/update_drive/'.$drive_data->ID.'', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Taxi driver ID:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'taxi_driver_ID',
            'placeholder' => 'Enter Taxi driver ID (COMBOBOX incoming)',
            'value' => $drive_data->taxi_driver_ID
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Car ID:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'car_ID',
            'placeholder' => 'Enter Car ID (COMBOBOX incoming)',
            'value' => $drive_data->car_ID
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Shift ID:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'shift_ID',
            'placeholder' => 'Enter shift ID (COMBOBOX incoming)',
            'value' => $drive_data->shift_ID
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Address of starting location:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'from_address',
            'placeholder' => 'Enter Address of starting location (example: Tr. A. Hlinku 1, Nitra)',
            'value' => $drive_data->from_address
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Address of destination:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'to_address',
            'placeholder' => 'Enter Address of destination (example: Bozeny Slancikovej 1, Nitra)',
            'value' => $drive_data->to_address
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Distance travelled:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'distance',
            'placeholder' => 'Enter distance travelled in km (example: 2.3)',
            'value' => $drive_data->distance
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Price per kilometer:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'price_per_km',
            'placeholder' => 'Enter price per kilometer',
            'value' => $drive_data->price_per_km
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Earned money:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'amount_earned',
            'placeholder' => 'Enter the amount driver received',
            'value' => $drive_data->amount_earned
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">

        <?php
        $data = array(
            'class' => 'btn btn-success',
            'name' => 'submit',
            'value' => 'UPDATE'
        );
        ?>

        <?php echo form_submit($data); ?>
    </div>

    <?php echo form_close(); ?>
</div>