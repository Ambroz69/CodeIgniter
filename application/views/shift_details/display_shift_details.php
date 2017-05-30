
<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Shift detail #<?php echo $shift_details_data->ID; ?></h2>
    <ul class="item-group">
        Type:<li class="list-group-item"><?php echo $shift_details_data->type; ?></li><br><br>
        Shift start time:<li class="list-group-item"><?php echo $shift_details_data->shift_start; ?></li><br><br>
        Shift end time:<li class="list-group-item"><?php echo $shift_details_data->shift_end; ?></li><br><br>
        Hourly wage (Euro):<li class="list-group-item"><?php echo $shift_details_data->hourly_wage; ?></li><br><br>
    </ul>
</div>
<div class="col-xs-1">

</div>
<div class='col-xs-3 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <ul class='btn-group'>
        <h4 class="text-center">Shift details management</h4>
        <td><a href='<?php echo base_url();?>shift_details/update_shift_details/<?php echo $shift_details_data->ID; ?>' class='btn btn-sm btn-block btn-warning' role='button'>Edit shift detail</a></td>
        <td><a href='<?php echo base_url();?>shift_details/delete_shift_details/<?php echo $shift_details_data->ID; ?>' onclick="return confirm('Delete shift detail #<?php echo $shift_details_data->ID; ?>?')" class='btn btn-sm btn-block btn-danger' role='button'>Delete shift detail </a></td>
    </ul>
</div>
