<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $timestamps = false;
    public function up()
    {
        Schema::create('db', function (Blueprint $table) {
            $$table->id();
            // $table->increments('id');//代表資料成功建立時自動增加id編號
            $table->integer('templateId')->nullale();
            $table->string('templateName');
            $table->text('templateContent')->nullale();
            $table->string('lineAccountId', 18)->nullale();
            $table->string('market', 18)->nullale();
            $table->string('camapigId', 1024)->nullale();
            $table->string('type', 18)->nullale();

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
        Schema::dropIfExists('db');
    }
};
