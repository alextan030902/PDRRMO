<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutPdrmmoTable extends Migration
{
    public function up()
    {
        Schema::create('about_pdrmmo', function (Blueprint $table) {
            $table->id();
            $table->string('section');  // E.g., 'about', 'mandate', 'vision'
            $table->text('content');    // The editable content
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_pdrmmo');
    }
}
