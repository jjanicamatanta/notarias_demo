<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsHasPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_has_persons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('document_id');
            $table->timestamps();
            $table->foreign('document_id')->references('id')->on('documents');
            $table->foreign('person_id')->references('id')->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents_has_persons');
    }
}
