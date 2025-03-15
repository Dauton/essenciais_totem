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
        Schema::create('sites', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('site', '50')->nullable();
            $table->string('titulo_url1', '100')->nullable();
            $table->string('url1', '200')->nullable();
            $table->string('titulo_url2', '100')->nullable();
            $table->string('url2', '200')->nullable();
            $table->string('titulo_url3', '100')->nullable();
            $table->string('url3', '200')->nullable();
            $table->string('titulo_url4', '100')->nullable();
            $table->string('url4', '200')->nullable();
            $table->string('titulo_url5', '100')->nullable();
            $table->string('url5', '200')->nullable();
            $table->string('titulo_url6', '100')->nullable();
            $table->string('url6', '200')->nullable();
            $table->string('titulo_url7', '100')->nullable();
            $table->string('url7', '200')->nullable();
            $table->string('titulo_url8', '100')->nullable();
            $table->string('url8', '200')->nullable();
            $table->string('titulo_url9', '100')->nullable();
            $table->string('url9', '200')->nullable();
            $table->string('titulo_url10', '100')->nullable();
            $table->string('url10', '200')->nullable();
            $table->string('titulo_url11', '100')->nullable();
            $table->string('url11', '200')->nullable();
            $table->string('titulo_url12', '100')->nullable();
            $table->string('url12', '200')->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
