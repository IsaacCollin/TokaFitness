<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness_advice', function (Blueprint $table) {
            $table->id('id');
            $table->char('desc');
            $table->char('link_location');
            $table->char('thumbnail_img');
            $table->char('img_alt');
            $table->char('fitness_title');
            $table->text('fitness_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fitness_advice');
    }
};
