<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeptManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_manager', function (Blueprint $table) {
            $table->integer('emp_no');
            $table->char('dept_no', 4);
            $table->date('from_date');
            $table->date('to_date');
            
            $table->primary(['emp_no', 'dept_no']);
            $table->foreign('emp_no', 'dept_manager_ibfk_1')->references('emp_no')->on('employees')->onDelete('cascade');
            $table->foreign('dept_no', 'dept_manager_ibfk_2')->references('dept_no')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dept_manager');
    }
}
