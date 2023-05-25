<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelFakultetlar4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->text('gallereya')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->dropColumn('gallereya');
        });
    }
}
