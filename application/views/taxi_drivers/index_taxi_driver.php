<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Taxi drivers table</h2>

    <p class="bg-success ">
        <?php if ($this->session->flashdata('taxi_driver_created')): ?>
            <?php echo $this->session->flashdata('taxi_driver_created'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('taxi_driver_updated')): ?>
            <?php echo $this->session->flashdata('taxi_driver_updated'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('taxi_driver_deleted')): ?>
            <?php echo $this->session->flashdata('taxi_driver_deleted'); ?>
        <?php endif; ?>
    </p>


    <table class="table table-hover">

        <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>taxi_drivers/create_taxi_driver">ADD new taxi driver</a>

        <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Phone number
            </th>
            <th>
                Address
            </th>
            <th>
                Hired
            </th>
            <th>
                Fired
            </th>
            <th>
                Driving Licence Number
            </th>
            <th>
                Driving Licence Expiration
            </th>
            <th>
                Rating
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($taxi_drivers as $taxi_driver): ?>
            <tr>
                <?php echo "<td>".$taxi_driver->ID."</td>"; ?>
                <?php echo "<td>".$taxi_driver->first_name."</td>"; ?>
                <?php echo "<td>".$taxi_driver->last_name."</a></td>"; ?>
                <?php echo "<td>".$taxi_driver->phone_number."</td>"; ?>
                <?php echo "<td>".$taxi_driver->address."</td>"; ?>
                <?php echo "<td>".$taxi_driver->hired_date."</a></td>"; ?>
                <?php echo "<td>".$taxi_driver->fired_date."</td>"; ?>
                <?php echo "<td>".$taxi_driver->driving_licence_number."</td>"; ?>
                <?php echo "<td>".$taxi_driver->driving_licence_expiration."</a></td>"; ?>
                <?php echo "<td>".$taxi_driver->rating."<td><a href='".base_url()."taxi_drivers/display_taxi_driver/".$taxi_driver->ID."' class='btn btn-xs btn-info' role='button'>Details</a></td></td>"; ?>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
</div>