<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaOtmpanelXodimlarVaRaxbariyat extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_otmpanel_xodimlar_va_raxbariyat', function($table)
        {
            $table->text('info_repeat')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_otmpanel_xodimlar_va_raxbariyat', function($table)
        {
            $table->dropColumn('info_repeat');
        });
    }
}
