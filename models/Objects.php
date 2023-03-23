<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Objects extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'openmindedit_fieldengineeringtoolkit_objects';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        // 'relatedObjects' => Objects::class,
        'relatedObjects' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Objects', 'key' => 'parent_id']
    ];

    public $belongsTo = [
        'parentObject' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Objects', 'key' => 'parent_id'],
        'customer' => Customers::class
    ];

    public $relatedOrderBy = ['object_name' => 'asc'];

    public $attachMany = [
        'photos' => 'System\Models\File'
    ];
}
