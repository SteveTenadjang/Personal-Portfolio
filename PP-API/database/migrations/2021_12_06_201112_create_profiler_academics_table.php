<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilerAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('profiler_academics', static function (Blueprint $table) {
            $table->id();
            $table->mediumText('diploma_title');
            $table->mediumText('diploma_description');
            $table->mediumText('institution_attended');
            $table->foreignId('profiler_info_id');
            $table->date('started_on');
            $table->date('finished_on')->nullable();
            $table->softDeletes();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('profiler_academics');
    }
}
