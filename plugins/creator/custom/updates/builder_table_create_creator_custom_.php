<?php namespace Creator\Custom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCreatorCustom extends Migration
{
    public function up()
    {
        Schema::create('creator_custom_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('creator_custom_');
    }
}
