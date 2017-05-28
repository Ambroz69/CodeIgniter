
<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Registration.</h2>
    <?php $attributes = array('ID'=>'register_form', 'class'=> 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>


    <?php echo form_open('users/register', $attributes); ?>

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
        <?php echo form_label('E-mail:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'email',
            'placeholder' => 'Enter E-mail address'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Username:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username'
        );
        ?>

        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Password:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter Password'
        );
        ?>

        <?php echo form_password($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Confirm Password:'); ?>

        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password'
        );
    ?>

        <?php echo form_password($data); ?>
    </div>

    <div class="form-group">

        <?php
        $data = array(
            'class' => 'btn btn-info',
            'name' => 'submit',
            'value' => 'REGISTER'
        );
        ?>

        <?php echo form_submit($data); ?>
    </div>

    <?php echo form_close(); ?>
</div>