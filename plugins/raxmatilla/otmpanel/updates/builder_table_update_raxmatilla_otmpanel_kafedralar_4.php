<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelKafedralar4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_kafedralar', function($table)
        {
            $table->integer('creater_user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_kafedralar', function($table)
        {
            $table->dropColumn('creater_user_id');
        });
    }
}
