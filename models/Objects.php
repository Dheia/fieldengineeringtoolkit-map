<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Illuminate\Support\Str;
use Model;

/**
 * Model
 */
class Objects extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Multisite;
    
    protected $propagatable = [];

    protected $dates = ['deleted_at'];
    
    public $table = 'openmindedit_fieldengineeringtoolkit_objects';

    public $rules = [
    ];

    public function beforeCreate()
    {
        // Generate a unique code for the object
        $code = Str::random(8);

        // Check if the code already exists in the database
        while (Objects::where('code', $code)->count() > 0) {
            $code = Str::random(8);
        }

        // Set the generated code for the object
        $this->code = $code;
    }

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
