<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class CreateTransferTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transferences', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('payer_id');
            $table->uuid('payee_id');
            $table->integer('value');
            $table->timestamp('confirmed_at')->nullable();
            $table->datetimes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transferences');
    }
}
