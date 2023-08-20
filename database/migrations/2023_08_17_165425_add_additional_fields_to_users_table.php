<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('url_facebook')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('url_linkedin')->nullable();
            $table->string('url_gme')->nullable();
            $table->string('url_background')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone')->nullable();
            $table->dropColumn('url_facebook')->nullable();
            $table->dropColumn('url_twitter')->nullable();
            $table->dropColumn('url_linkedin')->nullable();
            $table->dropColumn('url_gme')->nullable();
            $table->dropColumn('url_background')->nullable();
        });
    }
};
