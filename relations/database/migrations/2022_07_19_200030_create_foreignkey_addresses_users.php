<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            //SET NULL - Qdo endereço for apagado, o user_id na tabela vai setar Null
            //Cascate - Qdo o address for apagado, tds os dados vinculados a ele serão apagados juntos 
            ->onDelete('SET NULL');
 
        });
    }

   
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });
    }
};
