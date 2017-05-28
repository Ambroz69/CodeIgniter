<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Cars table</h2>

    <p class="bg-success ">
        <?php if ($this->session->flashdata('car_created')): ?>
            <?php echo $this->session->flashdata('car_created'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('car_updated')): ?>
            <?php echo $this->session->flashdata('car_updated'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('car_deleted')): ?>
            <?php echo $this->session->flashdata('car_deleted'); ?>
        <?php endif; ?>
    </p>


    <table class="table table-hover">

        <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>cars/create_car">ADD new car</a>

        <thead>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Licence plate
                </th>
                <th>
                    Mileage (km)
                </th>
                <th>
                    Expiration date of vehicle inspection (STK)
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cars as $car): ?>
                <tr>
                <?php echo "<td>".$car->ID."</td>"; ?>
                <?php echo "<td>".$car->licence_plate."</a></td>"; ?>
                <?php echo "<td>".$car->mileage."</td>"; ?>
                <?php echo "<td>".$car->vehicle_inspection_expiration."<td><a href='".base_url()."cars/display_car/".$car->ID."' class='btn btn-xs btn-info' role='button'>Details</a></td></td>"; ?>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
</div>