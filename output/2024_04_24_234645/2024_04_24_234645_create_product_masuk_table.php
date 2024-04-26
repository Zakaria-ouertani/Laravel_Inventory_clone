

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_masuk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('supplier_id')->unsigned();
            $table->integer('qty');
            $table->date('tanggal');
            $table->timestamps();
            $table->index(["product_id"]);
            $table->index(["supplier_id"]);
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
        Schema::dropIfExists('product_masuk');
    }
}

