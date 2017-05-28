
<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Adding new taxi driver.</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('taxi_drivers/create_taxi_driver', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('First Name:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'first_name',
            'placeholder' => 'Enter First Name'
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
            'placeholder' => 'Enter Last Name'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Phone number:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'phone_number',
            'placeholder' => 'Enter phone number (example 0917066805)'
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
            'placeholder' => 'Enter Address (example Jiraskova 22, Bardejov)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Date of first day in work:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'hired_date',
            'placeholder' => 'Enter hired date (example: 2015-05-14)'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Date of last day in work (if no longer working):'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'fired_date',
            'placeholder' => 'Enter fired date (example: 2015-07-17) - leave empty if still working'
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
            'placeholder' => 'Enter Driving licence number (example: E01743104)'
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
            'placeholder' => 'Enter date of expiration (example: 2024-01-15)'
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
            'placeholder' => 'Enter rating on scale of 1-10 (10 is the best)'
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