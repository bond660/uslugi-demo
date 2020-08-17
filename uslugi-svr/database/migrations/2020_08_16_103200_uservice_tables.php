<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserviceTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('users', 'user');

        Schema::create('u_service_category', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->string('title');
            $table->string('css_color');
        });

        Schema::create('u_service', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->string('title');
            $table->string('description');
            $table->string('fa_icon');

            $table->integer('category_id');

            $table->boolean('is_off');

            $table->integer('min_days');
            $table->integer('max_days');

            $table->foreign('category_id')->references('id')->on('u_service_category');
        });

        Schema::create('u_service_request', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->string('user_text');

            $table->integer('status');
            $table->integer('service_id');
            $table->integer('user_id');

            $table->foreign('service_id')->references('id')->on('u_service');
            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('u_service_request');
        Schema::drop('u_service');
        Schema::drop('u_service_category');

        Schema::rename('user', 'users');
    }
}
