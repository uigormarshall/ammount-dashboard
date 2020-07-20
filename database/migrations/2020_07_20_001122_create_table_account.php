<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAccount extends Migration
{
    public function up()
    {
        Schema::create('Account', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('typeId');
            $table->foreign('typeId')->references('id')->on('AccountType');
            $table->string('name', 25)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('Account', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
