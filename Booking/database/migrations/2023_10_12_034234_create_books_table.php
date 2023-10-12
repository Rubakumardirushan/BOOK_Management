<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
         Schema::create('books', function (Blueprint $table) {
             $table->id(); // Auto-increment primary key
             $table->string('title');
             $table->string('author');
             $table->decimal('price', 8, 2); // Decimal with 8 total digits and 2 decimal places
             $table->integer('stock');
             $table->timestamps(); // created_at and updated_at timestamps
         });
     }




 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
