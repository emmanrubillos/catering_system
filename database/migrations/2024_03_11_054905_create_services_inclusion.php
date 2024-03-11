<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesInclusion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_inclusion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->contrained('services');
            $table->foreignId('classification_id')->contrained('classifications');
            $table->foreignId('inclusion_id')->contrained('inclusions');
            $table->integer('total_number');
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
        Schema::dropIfExists('services_inclusion');
    }
}
