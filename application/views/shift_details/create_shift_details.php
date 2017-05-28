
<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Adding new shift details.</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('shift_details/create_shift_details', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Type:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'type',
            'placeholder' => 'Enter type of shift (morning/afternoon/night)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Shift start time:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'shift_start',
            'placeholder' => 'Enter shift start time (example: 08:45:00)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Shift end time:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'shift_end',
            'placeholder' => 'Enter shift start time (example: 16:30:00)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Hourly wage:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'hourly_wage',
            'placeholder' => 'Enter hourly wage in Euros (example: 4.0)'
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