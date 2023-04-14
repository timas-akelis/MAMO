<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('timeslots', function (Blueprint $table) {
            $table->foreignId('school_id')->default(0)->constrained()->onDelete('cascade');
        });

        Schema::table('lessons', function (Blueprint $table) {
            $table->foreignId('timeslot_id')->constrained()->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('timeslots', function (Blueprint $table) {
            $table->dropForeignIdFor('school_id');
            $table->dropColumn('school_id');
        });

        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeignIdFor('timeslot_id');
            $table->dropColumn('timeslot_id');
        });
    }
};
