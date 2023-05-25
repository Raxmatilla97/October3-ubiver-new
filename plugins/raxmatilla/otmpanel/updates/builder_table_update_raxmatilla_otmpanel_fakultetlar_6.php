<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelFakultetlar6 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->boolean('is_active')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->dropColumn('is_active');
        });
    }
}
