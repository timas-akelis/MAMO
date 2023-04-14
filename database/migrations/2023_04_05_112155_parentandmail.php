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
        Schema::create('child_parent', function (Blueprint $table) {
            $table->unsignedBigInteger('child_id');
            $table->unsignedBigInteger('parent_id');
            $table->foreign('child_id')->references('id')->on('users');
            $table->foreign('parent_id')->references('id')->on('users');
        });

        Schema::create('mail_receiver', function (Blueprint $table) {
            $table->unsignedBigInteger('mail_id');
            $table->unsignedBigInteger('receiver_id');
            $table->foreign('mail_id')->references('id')->on('mails');
            $table->foreign('receiver_id')->references('id')->on('users');
        });

        Schema::table('mails', function (Blueprint $table) {
            $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')->references('id')->on('users')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_parent');

        Schema::dropIfExists('mail_sender');

        Schema::table('mail', function (Blueprint $table) {
            $table->dropForeignIdFor('sender_id');
            $table->dropColumn('sender_id');
        });
    }
};
