<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foods', function (Blueprint $table) {
            $table->integer('id_kategori')->unsigned()->change();
            $table->foreign('id_kategori')->references('id')->on('kategori')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foods', function(Blueprint $table) {
            $table->dropForeign('id_kategori_menu_foreign');
        });
    ​
        Schema::table('foods', function(Blueprint $table) {
            $table->dropIndex('id_kategori_menu_foreign');
        });
    ​
        Schema::table('foods', function(Blueprint $table) {
            $table->integer('id_kategori')->change();
        });
    }
}
