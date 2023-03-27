<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Objects extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;

    protected $slugs = ['slug' => 'id'];
    protected $dates = ['deleted_at'];
    protected $slugging = ['forceUpdate' => true];

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

    public function getSluggableAttributes()
    {
        return $this->slugs;
    }

    public function makeSlugUnique($slug, $field, $value, $config)
    {
        $count = 2;
        $originalSlug = $slug;

        // Check if a record with the same slug already exists
        while ($this->newQuery()
                   ->where($field, $slug)
                   ->where('id', '<>', $this->id ?? null)
                   ->first()) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = $model->generateSlug($model->id);
        });
    }
}
