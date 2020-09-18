<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            //名前(name)を保存するカラム
            $table->string('name');
            
            //性別(gender)を保存するカラム
            $table->string('gender');
            
            //趣味(hobby)を保存するカラム
            $table->string('hobby');
            
            //自己紹介(introduction)を保存するカラム
            $table->string('introduction');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
