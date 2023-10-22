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
        Schema::table('tasks_assignment', function (Blueprint $table) {
            $table->string('status')->default('0')->comment('0 = pending, 1 = complete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks_assignment', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
