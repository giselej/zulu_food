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
        Schema::create('comanda_itens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comanda_itens');
    }
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */

      public function up(): void
    {
        Schema::create('comanda-itens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsiginedBigInteger('comanda-id');
           $table->foreign('comanda-id')->references("id")->on('comandas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comanda-itens');
    }
};
