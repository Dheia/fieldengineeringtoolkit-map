<?php namespace OpenMindedIT\FieldEngineeringToolkit\Components;

use Cms\Classes\ComponentBase;
use OpenMindedIT\FieldEngineeringToolkit\Models\Objects;

class Objectlist extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'Objectlist',
            'description' => 'List of all the registred objects'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'object_archive' => [
                'title'             => 'Gearchiveerd',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    // Functie de de gegevens ophaalt uit de database
    public function getObject_ArchiveOptions()
    {
        return Objects::get()->lists('object_archive', 'object_archive');
    }

    public function onRun()
    {
        // filter voor gearchiveerde item keuze uit 0 en 1
        $this->item = Objects::where('object_archive', $this->property('object_archive'))->get()->toArray();
    }
}
