<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelFakultetlar3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->string('img_fon')->nullable();
            $table->renameColumn('img', 'img_logo');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->dropColumn('img_fon');
            $table->renameColumn('img_logo', 'img');
        });
    }
}
