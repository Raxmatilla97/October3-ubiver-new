<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelFakultetlar extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->text('boshliq_repeat')->nullable();
            $table->dropColumn('boshliq_id');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->dropColumn('boshliq_repeat');
            $table->integer('boshliq_id')->nullable();
        });
    }
}
