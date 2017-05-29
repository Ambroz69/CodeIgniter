<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/421c1aa365.js"></script>
</head>
<body>

<!-- kopirovane z bootstrap stranky, nerozumiem #žebroJankuBoli !-->
<nav class="navbar navbar-default bg-info">
    <div class="container-fluid bg-info img-rounded" style="border:3px groove cornflowerblue">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header text-success">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><b>Taxi PENGUIN</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>"><b><i class="fa fa-home" aria-hidden="true"></i> Home</b> <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url(); ?>cars/index"><b><i class="fa fa-taxi" aria-hidden="true"></i> Cars</b> <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url(); ?>taxi_drivers/index_taxi_driver"><b><i class="fa fa-male" aria-hidden="true"></i> Taxi Drivers</b> <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url(); ?>shifts/index_shift"><b><i class="fa fa-briefcase" aria-hidden="true"></i> Shifts</b> <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url(); ?>shift_details/index_shift_details"><b><i class="fa fa-id-card-o" aria-hidden="true"></i> Shift details</b> <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url(); ?>drives/index_drive"><b><i class="fa fa-road" aria-hidden="true"></i> Rides</b> <span class="sr-only">(current)</span></a></li>
            </ul>

            <?php if($this->session->userdata('logged_in')): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>users/logout"><b><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</b></a></li>
                </ul>
            <?php endif; ?>

            <?php if(!$this->session->userdata('logged_in')): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>users/register"><b>Register</b> <span class="sr-only">(current)</span></a></li>
                </ul>
            <?php endif; ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container-fluid">

    <div class="col-xs-9">
        <?php $this->load->view($main_view); ?>
    </div>

    <div class="col-xs-1">

    </div>

    <div class="container-fluid col-xs-2 container-fluid bg-info img-rounded " align="center" style="border:3px groove cornflowerblue">
        <?php $this->load->view('users/login_view'); ?>
    </div>

</div>

</body>
</html>
