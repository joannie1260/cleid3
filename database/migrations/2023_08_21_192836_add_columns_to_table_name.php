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
            $table->string('url_instagram')->nullable();
            $table->string('url_threads')->nullable();
            $table->string('url_compagnie')->nullable();
            $table->string('url_title')->nullable();
            $table->enum('role', ['user', 'admin'])->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('url_instagram');
            $table->dropColumn('url_threads');
            $table->dropColumn('url_compagnie');
            $table->dropColumn('url_title');
            $table->dropColumn('role');
        });
    }
};
