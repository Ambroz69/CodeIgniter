<div class='col-xs-12 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Shifts table</h2>

    <p class="bg-success ">
        <?php if ($this->session->flashdata('shift_created')): ?>
            <?php echo $this->session->flashdata('shift_created'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('shift_updated')): ?>
            <?php echo $this->session->flashdata('shift_updated'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('shift_deleted')): ?>
            <?php echo $this->session->flashdata('shift_deleted'); ?>
        <?php endif; ?>
    </p>


    <table class="table table-hover">

        <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>shifts/create_shift">ADD new shift</a>

        <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                Shift details #
            </th>
            <th>
                Customers transported
            </th>
            <th>
                Total amount earned
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($shifts as $shift): ?>
            <tr>
                <?php echo "<td>".$shift->ID."</td>"; ?>
                <?php echo "<td><a href='".base_url()."shift_details/display_shift_details/". $shift->shift_details_ID ."'>" .$shift->shift_details_ID . "</a></td>"; ?>
                <?php echo "<td>".$shift->customers_transported."</td>"; ?>
                <?php echo "<td>".$shift->total_amount_earned."<td><a href='".base_url()."shifts/display_shift/".$shift->ID."' class='btn btn-xs btn-info' role='button'>Details</a></td></td>"; ?>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
</div>