<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Shift details table</h2>

    <p class="bg-success ">
        <?php if ($this->session->flashdata('shift_details_created')): ?>
            <?php echo $this->session->flashdata('shift_details_created'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('shift_details_updated')): ?>
            <?php echo $this->session->flashdata('shift_details_updated'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('shift_details_deleted')): ?>
            <?php echo $this->session->flashdata('shift_details_deleted'); ?>
        <?php endif; ?>
    </p>


    <table class="table table-hover">

        <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>shift_details/create_shift_details">ADD new shift detail</a>

        <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                Type
            </th>
            <th>
                Shift start time
            </th>
            <th>
                Shift end time
            </th>
            <th>
                Hourly wage (Euro)
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($shift_details as $shift_details): ?>
            <tr>
                <?php echo "<td>".$shift_details->ID."</td>"; ?>
                <?php echo "<td>".$shift_details->type."</a></td>"; ?>
                <?php echo "<td>".$shift_details->shift_start."</td>"; ?>
                <?php echo "<td>".$shift_details->shift_end."</td>"; ?>
                <?php echo "<td>".$shift_details->hourly_wage."<td><a href='".base_url()."shift_details/display_shift_details/".$shift_details->ID."' class='btn btn-xs btn-info' role='button'>Details</a></td></td>"; ?>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
</div>