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
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('id')-> primary();
            $table->string('descripcion');
            $table->double('precio', 14.2);
            $table->integer('stock');
            $table->boolean('pagaIsv');

// Producto:
// Id – int - identity - Primary Key
// descripcion – varchar
// precio – double
// stock – int
// pagaIsv – boolean

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
