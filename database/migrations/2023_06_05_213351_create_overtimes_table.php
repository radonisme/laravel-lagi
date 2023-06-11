<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overtimes', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->date('date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->time('time_start')->nullable()->default('00:00');
            $table->time('time_end')->nullable()->default('00:00');
            $table->timestamps();

        // $date = Carbon::parse('2016-09-17 11:00:00');
        // $now = Carbon::now();
        // $diff = $date->diffInDays($now);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('overtimes');
    }
};
