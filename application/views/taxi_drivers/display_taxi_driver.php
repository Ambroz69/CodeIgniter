<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Taxi driver #<?php echo $taxi_driver_data->ID; ?></h2>
    <ul class="item-group">
        First name:<li class="list-group-item"><?php echo $taxi_driver_data->first_name; ?></li><br><br>
        Last name:<li class="list-group-item"><?php echo $taxi_driver_data->last_name; ?></li><br><br>
        Phone number:<li class="list-group-item"><?php echo $taxi_driver_data->phone_number; ?></li><br><br>
        Address:<li class="list-group-item"><?php echo $taxi_driver_data->address; ?></li><br><br>
        Hired date:<li class="list-group-item"><?php echo $taxi_driver_data->hired_date; ?></li><br><br>
        Fired date:<li class="list-group-item"><?php echo $taxi_driver_data->fired_date; ?></li><br><br>
        Driver licence number:<li class="list-group-item"><?php echo $taxi_driver_data->driving_licence_number; ?></li><br><br>
        Driver licence expiration:<li class="list-group-item"><?php echo $taxi_driver_data->driving_licence_expiration; ?></li><br><br>
        Rating:<li class="list-group-item"><?php echo $taxi_driver_data->rating; ?></li><br><br>
    </ul>
</div>
<div class="col-xs-1">

</div>
<div class='col-xs-3 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <ul class='btn-group'>
        <h4 class="text-center">Taxi driver management</h4>
        <td><a href='' class='btn btn-sm btn-block btn-success' role='button'>Add ride</a></td>
        <td><a href='<?php echo base_url();?>taxi_drivers/update_taxi_driver/<?php echo $taxi_driver_data->ID; ?>' class='btn btn-sm btn-block btn-warning' role='button'>Edit driver</a></td>
        <td><a href='<?php echo base_url();?>taxi_drivers/delete_taxi_driver/<?php echo $taxi_driver_data->ID; ?>' class='btn btn-sm btn-block btn-danger' role='button'>Delete driver</a></td>
    </ul>
</div>
