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
        Schema::create('users', function (Blueprint $Table) {
            $Table->id();
            $Table->string('name');
            $Table->string('email')->unique();
            $Table->timestamp('email_verified_at')->nullable();
            $Table->string('password');
            $Table->rememberToken();
            $Table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $Table) {
            $Table->string('email')->primary();
            $Table->string('token');
            $Table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $Table) {
            $Table->string('id')->primary();
            $Table->foreignId('user_id')->nullable()->index();
            $Table->string('ip_address', 45)->nullable();
            $Table->text('user_agent')->nullable();
            $Table->longText('payload');
            $Table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
