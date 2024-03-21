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
        Schema::create('cobros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Orden_id');
            $table->string('Item');
            $table->tinyInteger('Cantidad');
            $table->mediumInteger('Precio');
            $table->tinyInteger('Mesa');
            $table->string('Estado');
            $table->timestamps();

            // Definir la relación con la tabla 'Ordenes'
            $table->foreign('Orden_id')->references('id')->on('ordenes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cobros');
    }
};
