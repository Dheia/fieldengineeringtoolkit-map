<?php namespace OpenMindedIT\FieldEngineeringToolkit;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['Renatio.FormBuilder'];

    public function registerComponents()
    {
        return [
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Objectlist' => 'Objectlist',
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Mapoverview' => 'Mapoverview',
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Planninglist' => 'Planninglist',
        ];
    }

    public function registerSettings()
    {
    }
}
