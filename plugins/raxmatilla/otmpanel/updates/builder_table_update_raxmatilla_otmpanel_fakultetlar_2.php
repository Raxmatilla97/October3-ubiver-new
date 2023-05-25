<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelFakultetlar2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->text('xodimlar_repeat')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->dropColumn('xodimlar_repeat');
        });
    }
}
