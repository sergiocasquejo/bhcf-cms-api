<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuynlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suynls', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('school_class_id');
            $table->unsignedInteger('member_id');
            $table->tinyInteger('level_1')->default(0);
            $table->tinyInteger('level_2')->default(0);
            $table->tinyInteger('level_3')->default(0);
            $table->tinyInteger('level_4')->default(0);
            $table->tinyInteger('level_5')->default(0);
            $table->tinyInteger('level_6')->default(0);
            $table->tinyInteger('level_7')->default(0);
            $table->tinyInteger('level_8')->default(0);
            $table->tinyInteger('level_9')->default(0);
            $table->tinyInteger('level_10')->default(0);
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
                ->references('id')->on('school_classes');
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
        Schema::dropIfExists('suynls');
    }
}
