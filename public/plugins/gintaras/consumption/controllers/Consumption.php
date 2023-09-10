<?php

namespace Gintaras\Consumption\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Consumption extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public function componentDetails()
    {
        return [
            'name' => 'Consumption',
            'description' => 'Implements a simple to-do list.'
        ];
    }


    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
    }
}
