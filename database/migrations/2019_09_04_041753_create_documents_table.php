<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_document_id');
            $table->unsignedBigInteger('html_template_id');
            $table->timestamps();
            $table->foreign('type_document_id')->references('id')->on('type_documents');
            $table->foreign('html_template_id')->references('id')->on('html_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
