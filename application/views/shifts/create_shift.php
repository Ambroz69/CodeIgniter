
<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Adding new shift</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('shifts/create_shift', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Shift details ID:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'shift_details_ID',
            'placeholder' => 'Enter Shift details ID (COMBOBOX incoming)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Customers transported:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'customers_transported',
            'placeholder' => 'Enter amount of customers transported during the shift'
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
            'placeholder' => 'Enter total money earned during the shift'
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