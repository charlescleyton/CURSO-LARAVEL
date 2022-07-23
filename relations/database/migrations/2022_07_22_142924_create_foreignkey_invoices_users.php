<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            //SET NULL - Qdo endereço for apagado, o address_id na tabela vai setar Null
            //Cascate - Qdo o address for apagado, tds os dados vinculados a ele serão apagados juntos 
            ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });
    }
};
