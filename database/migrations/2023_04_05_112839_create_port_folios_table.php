<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('port_folios', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('project_name');
            $table->string('campany_name');
            $table->longText('description');
            $table->string('campany_url');
            $table->string('logo');
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
        Schema::dropIfExists('port_folios');
    }
};
