<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Formhistory extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Multisite;
    
    protected $propagatable = [];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'renatio_formbuilder_form_logs';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
