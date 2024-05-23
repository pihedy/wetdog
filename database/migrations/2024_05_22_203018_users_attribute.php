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
        Schema::create('users_attribute', function (Blueprint $Table) {
            $Table->id();
            $Table->foreignId('user_id');
            $Table->string('attribute_name');
            $Table->string('attribute_value');
            $Table->timestamps();

            $Table->foreign('user_id', 'fk_users_attributes_users')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $Table->index('user_id', 'fk_users_attributes_users_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_attribute');
    }
};
