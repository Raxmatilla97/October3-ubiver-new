<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaOtmpanelXodimlarVaRaxbariyat extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_otmpanel_xodimlar_va_raxbariyat', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('fish')->nullable();
            $table->string('slug')->nullable();
            $table->text('desc')->nullable();
            $table->string('img')->nullable();
            $table->boolean('is_active')->nullable()->default(0);
            $table->integer('lavozim_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_otmpanel_xodimlar_va_raxbariyat');
    }
}
