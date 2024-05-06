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
        Schema::create('jobs', function (Blueprint $Table) {
            $Table->id();
            $Table->string('queue')->index();
            $Table->longText('payload');
            $Table->unsignedTinyInteger('attempts');
            $Table->unsignedInteger('reserved_at')->nullable();
            $Table->unsignedInteger('available_at');
            $Table->unsignedInteger('created_at');
        });

        Schema::create('job_batches', function (Blueprint $Table) {
            $Table->string('id')->primary();
            $Table->string('name');
            $Table->integer('total_jobs');
            $Table->integer('pending_jobs');
            $Table->integer('failed_jobs');
            $Table->longText('failed_job_ids');
            $Table->mediumText('options')->nullable();
            $Table->integer('cancelled_at')->nullable();
            $Table->integer('created_at');
            $Table->integer('finished_at')->nullable();
        });

        Schema::create('failed_jobs', function (Blueprint $Table) {
            $Table->id();
            $Table->string('uuid')->unique();
            $Table->text('connection');
            $Table->text('queue');
            $Table->longText('payload');
            $Table->longText('exception');
            $Table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};
