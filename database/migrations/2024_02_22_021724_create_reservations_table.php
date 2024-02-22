<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('package_id');
            $table->string('event_name');
            $table->string('email_address');
            $table->string('transaction_number');
            $table->string('accepted_by')->nullable();
            $table->string('pax');
            $table->string('theme_color');
            $table->string('meal_type');
            $table->string('descriptions');
            $table->string('service_date');
            $table->string('status');
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
        Schema::dropIfExists('reservations');
    }
}
