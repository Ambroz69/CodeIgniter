<h1>Cars table.</h1>

<table class="table table-hover">
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
            <?php echo "<td><a href='".base_url()."cars/display'>".$car->licence_plate."</a></td>"; ?>
            <?php echo "<td>".$car->mileage."</td>"; ?>
            <?php echo "<td>".$car->vehicle_inspection_expiration."<td><a href='".base_url()."cars/display' class='btn btn-xs btn-info' role='button'>Details</a></td></td>"; ?>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>