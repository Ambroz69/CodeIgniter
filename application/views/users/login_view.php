
<?php if($this->session->userdata('logged_in')): ?>
    <p class="pull-right">
    <h3>Welcome :)</h3>
    <?php echo form_open('users/logout'); ?>

        <p>
            <?php if ($this->session->userdata('username')): ?>
                <?php echo "Logged in as ".$this->session->userdata('username')."."; ?>
            <?php endif;?>
        </p>

        <?php

        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'LOG OUT'
        );
        ?>



        <?php echo form_submit($data); ?>

    <?php echo form_close(); ?>
    </p>

<?php else: ?>

    <h2>Please login to continue.</h2>
    <?php $attributes = array('ID'=>'create_form', 'class'=> 'form_horizontal'); ?>

    <?php if ($this->session->flashdata('errors')): ?>
        <?php echo $this->session->flashdata('errors'); ?>
    <?php endif; ?>


    <?php echo form_open('users/login', $attributes); ?>

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

        <?php
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'LOG IN'
        );
        ?>

        <?php echo form_submit($data); ?>
    </div>

    <?php echo form_close(); ?>

<?php endif; ?>