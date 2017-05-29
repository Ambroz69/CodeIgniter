<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Rides table</h2>

    <p class="bg-success ">
        <?php if ($this->session->flashdata('drive_created')): ?>
            <?php echo $this->session->flashdata('drive_created'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('drive_updated')): ?>
            <?php echo $this->session->flashdata('drive_updated'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('drive_deleted')): ?>
            <?php echo $this->session->flashdata('drive_deleted'); ?>
        <?php endif; ?>
    </p>


    <table class="table table-hover">

        <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>drives/create_drive">ADD new ride</a>

        <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                Taxi driver #
            </th>
            <th>
                Car #
            </th>
            <th>
                Shift #
            </th>
            <th>
                Address from
            </th>
            <th>
                Address to
            </th>
            <th>
                Distance
            </th>
            <th>
                Price per km
            </th>
            <th>
                Cash earned
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($drives as $drive): ?>
            <tr>
                <?php echo "<td>".$drive->ID."</td>"; ?>
                <?php echo "<td>".$drive->taxi_driver_ID."</td>"; ?>
                <?php echo "<td>".$drive->car_ID."</a></td>"; ?>
                <?php echo "<td>".$drive->shift_ID."</td>"; ?>
                <?php echo "<td>".$drive->from_address."</td>"; ?>
                <?php echo "<td>".$drive->to_address."</a></td>"; ?>
                <?php echo "<td>".$drive->distance."</td>"; ?>
                <?php echo "<td>".$drive->price_per_km."</td>"; ?>
                <?php echo "<td>".$drive->amount_earned."<td><a href='".base_url()."drives/display_drive/".$drive->ID."' class='btn btn-xs btn-info' role='button'>Details</a></td></td>"; ?>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
</div>