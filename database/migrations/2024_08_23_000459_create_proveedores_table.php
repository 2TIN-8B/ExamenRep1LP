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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->integer('idProveedor')-> primary();
            $table->string('nombre');
            $table->timestamp('fechaRegistro');
            $table->string('telefono');
            $table->string('correo');

// Proveedores
// Id proveedor – int
// nombre – varchar
// fechaRegistro – date
// teléfono – varchar
// correo - varchar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
