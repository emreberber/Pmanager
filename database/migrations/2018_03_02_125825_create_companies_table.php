<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{

    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->integer('user_id')->unsigned();
            
            $table->foreign('user_id')->rederences('id')->on('users');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
