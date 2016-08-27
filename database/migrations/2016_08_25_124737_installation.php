<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Installation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        /*----------  Company Table  ----------*/
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('missionStatement')->nullable();
            $table->text('visionStatement')->nullable();
            $table->string('mainLandPhone')->nullable();
            $table->string('mainMobilePhone')->nullable();
            $table->string('mainEmail')->nullable();
            $table->string('mainFacebookProfile')->nullable();
            $table->string('mainTwitterProfile')->nullable();
            $table->string('mainGooglePlusProfile')->nullable();
            $table->string('mainInstagramProfile')->nullable();
            $table->string('mainLinkedInProfile')->nullable();
            $table->string('mainCountry')->nullable();
            $table->string('mainState')->nullable();
            $table->string('mainCity')->nullable();
            $table->string('mainZIPCode')->nullable();
            $table->text('mainAddress')->nullable();
            $table->string('logoURL')->nullable();


            $table->timestamps();
        });

        /*----------  Product Table  ----------*/
        
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('price');
            $table->string('currencyAbbr')->nullable();
            $table->string('mainPictureURL')->nullable();
            $table->boolean('isMain')->nullable()->default(true);
            $table->float('rank')->nullable()->default('0.0');
            
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
        Schema::drop('company');
        Schema::drop('product');
    }
}
