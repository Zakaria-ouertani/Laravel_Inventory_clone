

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_keluar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('qty');
            $table->date('tanggal');
            $table->integer('owner_id')->unsigned();
            $table->timestamps();
            $table->index(["product_id"]);
            $table->index(["customer_id"]);
            $table->index(["owner_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_keluar');
    }
}

