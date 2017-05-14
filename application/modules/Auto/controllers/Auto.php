<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 14.5.2017
 * Time: 12:19
 */
class Auto extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("M_Auto");
    }

    function display_auto()
    {
        $data['page_header'] = "CARS";
        $data['description'] = "Display all cars.";
        $data['content_view'] = 'Auto/car_display_v';
        $this->template->call_admin_template($data);
    }

    function addAuto()
    {
        $data['page_header'] = "ADD CAR";
        $data['description'] = "Add car to database.";
        $data['content_view'] = 'Auto/add_car_v';
        $this->template->call_admin_template($data);
    }

    function post_auto()
    {

    }
}