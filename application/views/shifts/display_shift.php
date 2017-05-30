<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Shift #<?php echo $shift_data->ID; ?></h2>
    <ul class="item-group">
        <?php echo "<td><a href='".base_url()."shift_details/display_shift_details/". $shift_data->shift_details_ID ."'>Shift details</a></td>"; ?>
        <!--Shift details!--> ID:<li class="list-group-item"><?php echo $shift_data->shift_details_ID; ?></li><br><br>
        Start date of shift:<li class="list-group-item"><?php echo $shift_data->start_date; ?></li><br><br>
        End date of shift:<li class="list-group-item"><?php echo $shift_data->end_date; ?></li><br><br>
    </ul>
</div>
<div class="col-xs-1">

</div>
<div class='col-xs-3 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <ul class='btn-group'>
        <h4 class="text-center">Shift management</h4>
        <!--      <td><a href='' class='btn btn-sm btn-block btn-success' role='button'><b>Add ride</b></a></td> !=-->
        <td><a href='<?php echo base_url();?>shifts/update_shift/<?php echo $shift_data->ID; ?>' class='btn btn-sm btn-block btn-warning' role='button'>Edit shift</a></td>
        <td><a href='<?php echo base_url();?>shifts/delete_shift/<?php echo $shift_data->ID; ?>' onclick="return confirm('Delete shift #<?php echo $shift_data->ID; ?>?')" class='btn btn-sm btn-block btn-danger' role='button'>Delete shift</a></td>
    </ul>
</div>
