<?php

namespace Gintaras\Consumption\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGintarasConsumptionLogs extends Migration
{
    public function up()
    {
        Schema::table('gintaras_consumption_logs', function ($table) {
            $table->increments('id');
        });
    }

    public function down()
    {
        Schema::table('gintaras_consumption_logs', function ($table) {
            $table->dropColumn('id');
        });
    }
}
