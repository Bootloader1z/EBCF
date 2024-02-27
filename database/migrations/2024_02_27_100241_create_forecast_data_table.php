<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForecastDataTable extends Migration
{
    public function up()
    {
        Schema::create('forecast_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metric_id');
            $table->date('date');
            $table->decimal('value', 15, 2);
            $table->timestamps();

            $table->foreign('metric_id')->references('id')->on('financial_metrics')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('forecast_data');
    }
}
