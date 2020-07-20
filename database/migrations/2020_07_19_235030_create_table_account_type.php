<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAccountType extends Migration
{
    public function up()
    {
        Schema::create('AccountType', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('AccountType', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
