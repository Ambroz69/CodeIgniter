<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Shift #<?php echo $shift_data->ID; ?></h2>
    <ul class="item-group">
        Shift details ID:<li class="list-group-item"><?php echo $shift_data->shift_details_ID; ?></li><br><br>
        Amount of customers transported:<li class="list-group-item"><?php echo $shift_data->customers_transported; ?></li><br><br>
        Amount of cash received:<li class="list-group-item"><?php echo $shift_data->total_amount_earned; ?></li><br><br>
    </ul>
</div>
<div class="col-xs-1">

</div>
<div class='col-xs-3 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <ul class='btn-group'>
        <h4 class="text-center">Shift management</h4>
        <td><a href='' class='btn btn-sm btn-block btn-success' role='button'>Add ride</a></td>
        <td><a href='<?php echo base_url();?>shifts/update_shift/<?php echo $shift_data->ID; ?>' class='btn btn-sm btn-block btn-warning' role='button'>Edit shift</a></td>
        <td><a href='<?php echo base_url();?>shifts/delete_shift/<?php echo $shift_data->ID; ?>' class='btn btn-sm btn-block btn-danger' role='button'>Delete shift</a></td>
    </ul>
</div>
