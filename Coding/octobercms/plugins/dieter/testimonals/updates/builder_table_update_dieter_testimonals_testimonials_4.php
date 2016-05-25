<?php namespace Dieter\Testimonals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDieterTestimonalsTestimonials4 extends Migration
{
    public function up()
    {
        Schema::table('dieter_testimonals_testimonials', function($table)
        {
            $table->text('project_images');
        });
    }
    
    public function down()
    {
        Schema::table('dieter_testimonals_testimonials', function($table)
        {
            $table->dropColumn('project_images');
        });
    }
}
