<?php

namespace Gintaras\Consumption\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGintarasConsumptionLogs extends Migration
{
    public function up()
    {
        Schema::create('gintaras_consumption_logs', function ($table) {
            $table->date('filling_date');
            $table->double('water_consumption', 10, 0);
            $table->double('electricity_consumption', 10, 0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('gintaras_consumption_logs');
    }
}
