
<p class="bg-success">
    <?php if ($this->session->flashdata('login_success')): ?>
        <?php echo $this->session->flashdata('login_success'); ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('user_registered')): ?>
        <?php echo $this->session->flashdata('user_registered'); ?>
    <?php endif; ?>
</p>

<p class="bg-danger">
    <?php if ($this->session->flashdata('login_failed')): ?>
        <?php echo $this->session->flashdata('login_failed'); ?>
    <?php endif; ?>
</p>

<p class="bg-warning">
    <?php if ($this->session->flashdata('no_permission')): ?>
        <?php echo $this->session->flashdata('no_permission'); ?>
    <?php endif; ?>
</p>

<?php if (!$this->session->userdata('logged_in')):?>
    <div class="col-xs-12" align="center">
        <h2 align="center">Welcome to the <b>Taxi PENGUIN!</b></h2>
        <img src="http://i.imgur.com/eiigSIZ.jpg" class="img-thumbnail">
    </div>
    <div>

    </div>

<?php else:?>
    <!DOCTYPE html>
    <head>
        <title>Charts</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var jsonData1 = $.ajax({
                    url: "<?php echo base_url().'charts/getdata1' ?>",
                    dataType: "json",
                    async: false
                }).responseText;
                var jsonData2 = $.ajax({
                    url: "<?php echo base_url().'charts/getdata2' ?>",
                    dataType: "json",
                    async: false
                }).responseText;

                var data1 = new google.visualization.DataTable(jsonData1);
                var data2 = new google.visualization.DataTable(jsonData2);

                var options1 = {
                    'title':'Taxi drivers and their total count of rides',
                    'width':300,
                    'height':300,
                    'chartArea': {'width': '100%', 'height': '80%'},
                    'legend': {'position': 'bottom'}
                };
                var options2 = {
                    'title':'Cars distance travelled in service',
                    'width':400,
                    'height':300,
                    'chartArea': {'width': '60%', 'height': '80%'},
                    'legend': {'position': 'bottom'}
                };

                var chart1 = new google.visualization.PieChart(document.getElementById('chart_div1'));
                chart1.draw(data1, options1);

                var chart2 = new google.visualization.BarChart(document.getElementById('chart_div2'));
                chart2.draw(data2, options2);
            }

        </script>

    </head>

    <body>

        <div class="col-xs-4">
            <div id="chart_div1" class="container-fluid img-rounded" style="border:3px groove cornflowerblue"></div>
        </div>

        <div class="col-xs-3">

        </div>

        <div class="col-xs-5 pull-right">
            <div id="chart_div2" class="container-fluid img-rounded" style="border:3px groove cornflowerblue"></div>
        </div>



    </body>
    </html>

<?php endif;?>