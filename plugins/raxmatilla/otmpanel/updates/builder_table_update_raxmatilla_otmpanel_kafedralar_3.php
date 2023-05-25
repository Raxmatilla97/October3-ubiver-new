<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelKafedralar3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_kafedralar', function($table)
        {
            $table->text('mudir_repeat')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_kafedralar', function($table)
        {
            $table->dropColumn('mudir_repeat');
        });
    }
}
