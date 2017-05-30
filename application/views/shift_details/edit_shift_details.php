
<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Edit shift details</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('shift_details/update_shift_details/'.$shift_details_data->ID.'', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Type:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'type',
            'placeholder' => 'Enter type of shift (morning/afternoon/night)',
            'value' =>  $shift_details_data->type
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
            'placeholder' => 'Enter shift start time (example: 08:45:00)',
            'type' => 'time',
            'value' =>  $shift_details_data->shift_start
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
            'placeholder' => 'Enter shift start time (example: 16:30:00)',
            'type' => 'time',
            'value' =>  $shift_details_data->shift_end
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
            'placeholder' => 'Enter hourly wage in Euros (example: 4.0)',
            'value' =>  $shift_details_data->hourly_wage
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
        <a class="btn btn-danger" href="javascript:history.back(1)">Cancel</a>
    </div>

    <?php echo form_close(); ?>
</div>

<div class="col-xs-4">

</div>