<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JdCambiosTableProyectos extends Migration
{
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->decimal('presupuesto', 10, 2)->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->decimal('presupuesto', 8, 2)->nullable()->change();
        });
    }
}
