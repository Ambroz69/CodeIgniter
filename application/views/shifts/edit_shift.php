
<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Edit shift.</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('shifts/update_shift/'.$shift_data->ID.'', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Shift details ID:'); ?>

        <select class="form-control" name="shift_details_ID">
            <?php foreach($shift_details_ID as $row): ?>
                <?php if ($row->ID == $shift_data->shift_details_ID): ?>
                    <?php
                        echo '<option selected value="'.$row->ID.'">'.$row->ID.'</option>';
                    ?>
                <?php else: ?>
                    <?php
                    echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
                    ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <?php echo form_label('Customers transported:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'customers_transported',
            'placeholder' => 'Enter amount of customers transported during the shift',
            'value' => $shift_data->customers_transported
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Total amount earned:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'total_amount_earned',
            'placeholder' => 'Enter total money earned during the shift',
            'value' => $shift_data->total_amount_earned
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
        <a class="btn btn-danger" href='<?php echo base_url(); ?>shifts/index_shift'>Cancel</a>
    </div>

    <?php echo form_close(); ?>
</div>

<div class="col-xs-4">

</div>