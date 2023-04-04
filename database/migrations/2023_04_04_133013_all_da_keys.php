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
        /*

        From here, there is missing
        Lesson keys (already done in previous migration)
        Group to User, User to User keys due to this not being for many to many keys
        Mail keys, because no mail yet
        LessonTime, because no lessontime yet
        User roles, because not my problem :)

        */

        Schema::table('modules', function (Blueprint $table) {
            $table->foreignId('group_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
        });



        Schema::table('grades', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('lesson_id')->constrained()->onDelete('cascade');
        });

        Schema::table('rules', function (Blueprint $table) {
            $table->foreignId('school_id')->constrained()->onDelete('cascade');
        });

        Schema::table('rooms', function (Blueprint $table) {
            $table->foreignId('school_id')->constrained()->onDelete('cascade');
        });

        Schema::table('timetables', function (Blueprint $table) {
            $table->foreignId('school_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('modules', function (Blueprint $table) {
            $table->dropColumn('group_id');
            $table->dropColumn('user_id');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('school_id');
        });

        Schema::table('grades', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('lesson_id');
        });

        Schema::table('rules', function (Blueprint $table) {
            $table->dropColumn('school_id');
        });

        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn('school_id');
        });

        Schema::table('timetables', function (Blueprint $table) {
            $table->dropColumn('timetable_id');
        });
    }
};
