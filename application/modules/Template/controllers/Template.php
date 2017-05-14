<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 14.5.2017
 * Time: 0:24
 */

class Template extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function call_admin_template($data = NULL)
    {
        $this->load->view('admin_template_v', $data);
    }
}