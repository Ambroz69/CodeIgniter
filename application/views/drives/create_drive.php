
<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Adding new ride</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('drives/create_drive', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Taxi driver ID:'); ?>

        <select class="form-control" name="taxi_driver_ID">
            <?php
            foreach($taxi_driver_ID as $row) {
                echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <?php echo form_label('Car ID:'); ?>

        <select class="form-control" name="car_ID">
            <?php
            foreach($car_ID as $row) {
                echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <?php echo form_label('Shift ID:'); ?>

        <select class="form-control" name="shift_ID">
            <?php
            foreach($shift_ID as $row) {
                echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <?php echo form_label('Address of starting location:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'from_address',
            'placeholder' => 'Enter Address of starting location (example: Tr. A. Hlinku 1, Nitra)'
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
            'placeholder' => 'Enter Address of destination (example: Bozeny Slancikovej 1, Nitra)'
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
            'placeholder' => 'Enter distance travelled in km (example: 2.3)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Start time:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'start_time',
            'type' => 'time'
            //'placeholder' => 'Enter start_time'
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
            'placeholder' => 'Enter the amount driver received'
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
        <a class="btn btn-danger" href='<?php echo base_url(); ?>drives/index_drive'>Cancel</a>
    </div>

    <?php echo form_close(); ?>
</div>

<div class="col-xs-4">

</div>