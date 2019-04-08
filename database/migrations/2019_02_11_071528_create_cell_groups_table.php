<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCellGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cell_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id');
            $table->date('date_attended');
            $table->tinyInteger('attended')->default(0);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->foreign('created_by')
                ->references('id')->on('users');
            $table->foreign('updated_by')
                ->references('id')->on('users');
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
        Schema::dropIfExists('cell_groups');
    }
}
