<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaOtmpanelMarkazVaBolimlar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_otmpanel_markaz_va_bolimlar', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nomlanishi')->nullable();
            $table->string('slug')->nullable();
            $table->string('img')->nullable();
            $table->text('desc')->nullable();
            $table->text('info_repeat')->nullable();
            $table->boolean('markaz_or_bolim')->nullable();
            $table->boolean('is_active')->nullable()->default(0);
            $table->text('files_repeat')->nullable();
            $table->text('gallerey')->nullable();
            $table->string('map_location')->nullable();
            $table->text('xodimlar_repeat')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_otmpanel_markaz_va_bolimlar');
    }
}
