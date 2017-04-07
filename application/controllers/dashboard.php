<?php

class dashboard extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        check_session();
    }
            function index()
    {
        $this->template->load('template','view_dashboard');
    }
}