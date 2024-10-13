<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->unsignedBigInteger('category_id'); // Foreign Key to categories table
            $table->string('first_name', 255); // First Name
            $table->string('last_name', 255); // Last Name
            $table->tinyInteger('gender'); // Gender: 1 for male, 2 for female, 3 for other
            $table->string('email', 255); // Email
            $table->string('tell', 255); // Telephone
            $table->string('address', 255); // Address
            $table->string('building', 255); // Building
            $table->text('detail'); // Detail
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
