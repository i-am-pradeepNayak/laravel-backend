<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addposts', function (Blueprint $table) {
            $table->bigInteger('cid');
            $table->string('cname');
            $table->bigIncrements('jobid');
            $table->string('jobtype');
            $table->string('jobspec');
            $table->string('skills');
            $table->string('jqualy');
            $table->bigInteger('jhires');
            $table->string('jexpo');
            $table->string('jloc');
            $table->bigInteger('jpack');
            $table->string('jtime');
            $table->foreign('cid')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('addposts');
    }
}
