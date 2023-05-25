<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelKafedralar2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_kafedralar', function($table)
        {
            $table->boolean('is_active')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_kafedralar', function($table)
        {
            $table->dropColumn('is_active');
        });
    }
}
