<?php declare(strict_types=1);

use \Illuminate\Database\Migrations\Migration;
use \Illuminate\Database\Schema\Blueprint;
use \Illuminate\Support\Facades\Schema;

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cache', function (Blueprint $Table) {
            $Table->string('key')->primary();
            $Table->mediumText('value');
            $Table->integer('expiration');
        });

        Schema::create('cache_locks', function (Blueprint $Table) {
            $Table->string('key')->primary();
            $Table->string('owner');
            $Table->integer('expiration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
