<div class = "row">
    <div class = "col-md-12">
    <form method= "POST" action= "<?php echo base_url(); ?> Auto/post_auto" enctype="multipart/form-data">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Licence plate</label>
                    <input type="text" name = "Licence_plate" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Mileage</label>
                    <input type="text" name = "Mileage" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Vehicle inspection expiration date</label>
                    <input type="text" name = "VI_expiration" class = "form-control">
                </div>
            </div>


            <div class = "col-md-12">
                <button class = "btn btn-primary btn-large">SAVE</button>
                </div>
            </div>
    </form>
    </div>
</div>