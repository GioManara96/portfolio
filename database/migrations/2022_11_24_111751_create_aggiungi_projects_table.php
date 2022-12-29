<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAggiungiProjectsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('aggiungi_projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("title");
            $table->text("label");
            $table->text("img");
            $table->text("filter");
            $table->text("url");
            $table->text("galleryTitle");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('aggiungi_projects');
    }
}
