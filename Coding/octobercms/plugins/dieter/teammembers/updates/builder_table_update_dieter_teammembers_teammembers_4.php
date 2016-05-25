<?php namespace Dieter\Teammembers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDieterTeammembersTeammembers4 extends Migration
{
    public function up()
    {
        Schema::table('dieter_teammembers_teammembers', function($table)
        {
            $table->string('name', 255)->nullable()->change();
            $table->string('job', 255)->nullable()->change();
            $table->date('hiredate')->nullable()->change();
            $table->string('imageurl', 255)->nullable()->change();
            $table->string('url', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('dieter_teammembers_teammembers', function($table)
        {
            $table->string('name', 255)->nullable(false)->change();
            $table->string('job', 255)->nullable(false)->change();
            $table->date('hiredate')->nullable(false)->change();
            $table->string('imageurl', 255)->nullable(false)->change();
            $table->string('url', 255)->nullable(false)->change();
        });
    }
}
