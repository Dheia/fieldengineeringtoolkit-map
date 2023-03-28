<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenmindeditFieldengineeringtoolkitVisitrecords extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_visitrecords', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('visit_date')->nullable();
            $table->string('adres')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('engineer_id')->nullable();
            $table->string('description')->nullable();
            $table->string('visit_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('customers_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_visitrecords');
    }
}