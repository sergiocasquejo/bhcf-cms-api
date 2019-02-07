<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberToMinitry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_to_ministry', function (Blueprint $table) {
            $table->unsignedInteger('member_id');
            $table->unsignedInteger('ministry_id');

            $table->foreign('member_id')
            ->references('id')->on('users');
            $table->foreign('ministry_id')
                ->references('id')->on('ministries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_to_ministry');
    }
}
