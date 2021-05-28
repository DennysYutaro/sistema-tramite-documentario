<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{

    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('department');
            $table->string('province');
            $table->string('district');
            $table->string('address');
            $table->string('dni');
            $table->boolean('gender');
            $table->date('birth_date');
            $table->string('email');
            $table->string('phone');
            $table->string('family_burden');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
