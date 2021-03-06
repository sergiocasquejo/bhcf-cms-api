<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sols', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('school_class_id');
            $table->unsignedInteger('member_id');
            $table->tinyInteger('w1_devo')->default(0);
            $table->tinyInteger('w1_activity')->default(0);
            $table->tinyInteger('w2_devo')->default(0);
            $table->tinyInteger('w2_activity')->default(0);
            $table->tinyInteger('w3_devo')->default(0);
            $table->tinyInteger('w3_activity')->default(0);
            $table->tinyInteger('w4_devo')->default(0);
            $table->tinyInteger('w4_activity')->default(0);
            $table->tinyInteger('w5_devo')->default(0);
            $table->tinyInteger('w5_activity')->default(0);
            $table->tinyInteger('w6_devo')->default(0);
            $table->tinyInteger('w6_activity')->default(0);
            $table->tinyInteger('w7_devo')->default(0);
            $table->tinyInteger('w7_activity')->default(0);
            $table->tinyInteger('w8_devo')->default(0);
            $table->tinyInteger('w8_activity')->default(0);
            $table->tinyInteger('w9_devo')->default(0);
            $table->tinyInteger('w9_activity')->default(0);
            $table->tinyInteger('w10_devo')->default(0);
            $table->tinyInteger('w10_activity')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->char('remarks', 255)->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->foreign('created_by')
                ->references('id')->on('users');
            $table->foreign('updated_by')
                ->references('id')->on('users');
            $table->foreign('member_id')
                ->references('id')->on('members');
            $table->foreign('school_class_id')
                ->references('id')->on('classes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sols');
    }
}
