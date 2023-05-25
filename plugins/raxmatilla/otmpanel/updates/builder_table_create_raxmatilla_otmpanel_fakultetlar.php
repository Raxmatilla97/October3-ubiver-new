<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaOtmpanelFakultetlar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_otmpanel_fakultetlar', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nomlanishi')->nullable();
            $table->string('slug')->nullable();
            $table->string('img')->nullable();
            $table->text('desc')->nullable();
            $table->string('ppt_embed')->nullable();
            $table->string('pdf_embed')->nullable();
            $table->string('fakultet_youtube')->nullable();
            $table->text('files_repeat')->nullable();
            $table->integer('boshliq_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_otmpanel_fakultetlar');
    }
}
