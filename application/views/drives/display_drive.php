<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Ride #<?php echo $drive_data->ID; ?></h2>
    <ul class="item-group">
        Taxi driver #:<li class="list-group-item"><?php echo $drive_data->first_name; ?></li><br><br>
        Car #:<li class="list-group-item"><?php echo $drive_data->last_name; ?></li><br><br>
        Shift #:<li class="list-group-item"><?php echo $drive_data->phone_number; ?></li><br><br>
        Address of starting location:<li class="list-group-item"><?php echo $drive_data->address; ?></li><br><br>
        Address of destination:<li class="list-group-item"><?php echo $drive_data->hired_date; ?></li><br><br>
        Distance travelled:<li class="list-group-item"><?php echo $drive_data->fired_date; ?></li><br><br>
        Price per kilometer:<li class="list-group-item"><?php echo $drive_data->driving_licence_number; ?></li><br><br>
        Amount earned from drive in euros:<li class="list-group-item"><?php echo $drive_data->driving_licence_expiration; ?></li><br><br>
    </ul>
</div>
<div class="col-xs-1">

</div>
<div class='col-xs-3 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <ul class='btn-group'>
        <h4 class="text-center">Ride management</h4>
        <td><a href='<?php echo base_url();?>drives/update_drive/<?php echo $drive_data->ID; ?>' class='btn btn-sm btn-block btn-warning' role='button'>Edit ride</a></td>
        <td><a href='<?php echo base_url();?>drives/delete_drive/<?php echo $drive_data->ID; ?>' class='btn btn-sm btn-block btn-danger' role='button'>Delete ride</a></td>
    </ul>
</div>
