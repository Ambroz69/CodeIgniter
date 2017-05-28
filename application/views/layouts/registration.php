<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<!-- kopirovane z bootstrap stranky, nerozumiem #žebroJankuBoli !-->
<nav class="navbar navbar-default">
    <div class="container-fluid bg-info img-rounded" style="border:3px groove cornflowerblue">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header text-success">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Taxi PENGUIN</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url(); ?>users/register">Register <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url(); ?>taxi_drivers/index_taxi_driver">Taxi Drivers <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url(); ?>shift_details/index_shift_details">Shift details <span class="sr-only">(current)</span></a></li>
            </ul>

            <?php if($this->session->userdata('logged_in')): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
                </ul>
            <?php endif; ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container">

    <div class="col-xs-12">
        <?php $this->load->view($main_view); ?>
    </div>


</div>

</body>
</html>