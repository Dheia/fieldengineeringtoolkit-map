<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Customers extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'openmindedit_fieldengineeringtoolkit_customers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        // 'relatedObjects' => Objects::class,
        'relatedObjects' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Objects', 'key' => 'parent_id']
    ];
}
