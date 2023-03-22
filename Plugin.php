<?php namespace OpenMindedIT\FieldEngineeringToolkit;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['Renatio.FormBuilder'];

    public function registerComponents()
    {
        return [
            '\Nielsvandendries\Fieldengineeringtoolkit\Components\Objectlist' => 'Objectlist',
            '\Nielsvandendries\Fieldengineeringtoolkit\Components\Mapoverview' => 'Mapoverview',
            '\Nielsvandendries\Fieldengineeringtoolkit\Components\Planninglist' => 'Planninglist',
        ];
    }

    public function registerSettings()
    {
    }
}
