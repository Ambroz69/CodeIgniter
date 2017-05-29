<p class="bg-success">
    <?php if ($this->session->flashdata('login_success')): ?>
        <?php echo $this->session->flashdata('login_success'); ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('user_registered')): ?>
        <?php echo $this->session->flashdata('user_registered'); ?>
    <?php endif; ?>
</p>

<p class="bg-danger">
    <?php if ($this->session->flashdata('login_failed')): ?>
        <?php echo $this->session->flashdata('login_failed'); ?>
    <?php endif; ?>
</p>

<p class="bg-warning">
    <?php if ($this->session->flashdata('no_permission')): ?>
        <?php echo $this->session->flashdata('no_permission'); ?>
    <?php endif; ?>
</p>
<div class="col-xs-12" align="center">
    <h2 align="center">Welcome to the <b>Taxi PENGUIN!</b></h2>
    <img src="http://i.imgur.com/eiigSIZ.jpg" class="img-thumbnail">
</div>