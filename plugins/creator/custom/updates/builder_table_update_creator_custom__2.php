<?php namespace Creator\Custom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCreatorCustom2 extends Migration
{
    public function up()
    {
        Schema::table('creator_custom_', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('creator_custom_', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
