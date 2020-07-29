<?php

    class Home extends Controller
    {
        // Constructor.
        function __construct()
        {
            
        }
        
        // Home Page Method.
        public function index()
        {
            // Home Page View.
            $this->view('home/index');
        }
    }
    