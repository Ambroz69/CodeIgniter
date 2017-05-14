<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 14.5.2017
 * Time: 11:51
 */

class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->module([
           'Auto'
        ]);
    }

    function index()
    {
        $this->template->call_admin_template();
    }

    function auto()
    {
        $this->auto->display_auto();
    }

    function addAuto()
    {
        $this->auto->addAuto();
    }
}