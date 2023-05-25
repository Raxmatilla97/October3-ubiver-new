<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelLavozimlar extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_lavozimlar', function($table)
        {
            $table->text('info_repeat')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_lavozimlar', function($table)
        {
            $table->dropColumn('info_repeat');
        });
    }
}
