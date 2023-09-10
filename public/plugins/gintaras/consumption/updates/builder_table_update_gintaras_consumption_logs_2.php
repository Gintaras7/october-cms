<?php

namespace Gintaras\Consumption\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGintarasConsumptionLogs2 extends Migration
{
    public function up()
    {
        Schema::table('gintaras_consumption_logs', function ($table) {
            $table->integer('user_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('gintaras_consumption_logs', function ($table) {
            $table->dropColumn('user_id');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
