<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaOtmpanelKafedralar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_otmpanel_kafedralar', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nomlanishi')->nullable();
            $table->string('slug')->nullable();
            $table->string('img_logo')->nullable();
            $table->string('img_fon')->nullable();
            $table->text('desc')->nullable();
            $table->string('ppt_embed')->nullable();
            $table->string('pdf_embed')->nullable();
            $table->text('oqituvchilar_repeat')->nullable();
            $table->text('files_repeat')->nullable();
            $table->text('gallereya')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_otmpanel_kafedralar');
    }
}
