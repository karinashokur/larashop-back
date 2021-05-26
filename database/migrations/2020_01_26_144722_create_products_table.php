<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
final class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('uuid', 36);
            $table->string('name');
            $table->unsignedDecimal('price', 10);
            $table->timestamps();
            $table->unique('uuid');
        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
