<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            //$table->smallIncrements('id');
            $table->increments('id');
            $table->char('name', 30);
            $table->char('label', 100);
            $table->enum('status', ['A','I'])->default('A')->comment('A: ativo, I: Inativo');
            $table->timestamps();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            // $table->smallInteger('module_id')->unsigned();
            $table->integer('module_id')->unsigned();
            $table->string('name', 50);
            $table->string('label', 200);
            $table->enum('status', ['A','I'])->default('A')->comment('A: ativo, I: Inativo');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('label', 200);
            $table->enum('status', ['A','I'])->default('A')->comment('A: ativo, I: Inativo');
            $table->timestamps();

        });


        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->enum('status', ['A','I'])->default('A')->comment('A: ativo, I: Inativo');
            $table->timestamps();

            $table->primary(['role_id', 'user_id']);
            $table->foreign('role_id')->references('id') ->on('roles')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
        
        
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->enum('status', ['A','I'])->default('A')->comment('A: ativo, I: Inativo');
            $table->timestamps();
            
            $table->primary(['permission_id', 'role_id']);
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permission_role');
        Schema::drop('role_user');
        Schema::drop('permissions');
        Schema::drop('roles');
        Schema::drop('modules');
    }
}
