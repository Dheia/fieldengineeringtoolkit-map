<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesFieldengineeringtoolkitRelatedObjects extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_related_objects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('object_id');
            $table->string('related_object_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_related_objects');
    }
}