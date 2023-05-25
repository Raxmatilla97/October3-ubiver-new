<?php namespace raxmatilla\OtmPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaOtmpanelLavozimlar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_otmpanel_lavozimlar', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nomi')->nullable();
            $table->string('slug')->nullable();
            $table->string('img')->nullable();
            $table->boolean('is_active')->nullable()->default(0);
            $table->text('desc')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_otmpanel_lavozimlar');
    }
}
