<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->string('email');
            $table->String('phone');
            $table->String('name_business');
            $table->enum('package',['Diseño Web','Tiendas en Linea','posicionamiento seo','Sms Masivo','Email Marketing','Redes Sociales','base de datos','Marketing digital'])->default('Diseño Web');
            
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('envios');
    }
}


