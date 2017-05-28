<div class='col-xs-8 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <h2>Car #<?php echo $car_data->ID; ?></h2>
    <ul class="item-group">
        Licence plate:<li class="list-group-item"><?php echo $car_data->licence_plate; ?></li><br><br>
        Mileage (km):<li class="list-group-item"><?php echo $car_data->mileage; ?></li><br><br>
        STK expiration:<li class="list-group-item"><?php echo $car_data->vehicle_inspection_expiration; ?></li><br><br>
    </ul>
</div>
<div class="col-xs-1">

</div>
<div class='col-xs-3 container-fluid bg-info img-rounded' style="border:3px groove cornflowerblue">
    <ul class='btn-group'>
        <h4 class="text-center">Car management</h4>
        <td><a href='' class='btn btn-sm btn-block btn-success' role='button'>Add ride</a></td>
        <td><a href='<?php echo base_url();?>cars/update_car/<?php echo $car_data->ID; ?>' class='btn btn-sm btn-block btn-warning' role='button'>Edit car</a></td>
        <td><a href='<?php echo base_url();?>cars/delete_car/<?php echo $car_data->ID; ?>' class='btn btn-sm btn-block btn-danger' role='button'>Delete car</a></td>
    </ul>
</div>
