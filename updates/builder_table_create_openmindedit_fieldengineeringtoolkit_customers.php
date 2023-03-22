<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesFieldengineeringtoolkitCustomers extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_customers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->string('address');
            $table->string('zipcode');
            $table->string('city');
            $table->string('phone');
            $table->string('mail');
            $table->string('isactive');
            $table->string('planning_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_customers');
    }
}