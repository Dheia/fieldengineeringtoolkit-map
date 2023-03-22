<?php namespace OpenMindedIT\FieldEngineeringToolkit\Components;

use Cms\Classes\ComponentBase;
use OpenMindedIT\FieldEngineeringToolkit\Models\Planning;
use Carbon\Carbon;

class Planninglist extends ComponentBase
{
    public $plan;
    public $customer;
    public $engineer;
    public function componentDetails()
    {
        return [
            'name' => 'Planninglist',
            'description' => 'Generates a Planning'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->plan = Planning::get()->toArray();
        $plan = Planning::with('customer','engineer')->get()->toArray();
       
        $this->page['plan'] = $plan;
    }
}
