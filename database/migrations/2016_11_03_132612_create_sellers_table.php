<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            // These are the informations required for seller registration.
            $table->increments('id');
             $table->string('email')->unique();
            $table->string('password');
            $table->string('store_name');
            $table->string('store_slug');
           $table->enum('store_type', ['physical goods', 'digital goods']);
           $table->text('description');
           //These are the information that the seller are going to update in their profile, that is why they are all nullable.
           $table->enum('title', ['mr', 'mrs', 'miss'])->nullable();
           $table->string('firstname')->nullable();
            $table->string('profile_picture')->nullable();
             $table->string('id_card')->nullable();
           $table->string('lastname')->nullable();
           $table->string('phone_number')->nullable();
           $table->text('address')->nullable();
           $table->string('city')->nullable();
           $table->integer('state_id')->unsigned()->nullable();
           $table->integer('lga_id')->unsigned()->nullable();
           $table->string('referral_code')->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
             $table->foreign('lga_id')->references('id')->on('lgas')->onDelete('cascade');
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
        Schema::dropIfExists('sellers');
    }
}
