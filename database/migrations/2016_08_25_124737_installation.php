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
        if (!Schema::hasTable('company')) {

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
        } else {
            DB::table('company')->truncate();
        }

        /*----------  Product Table  ----------*/
        
        if (!Schema::hasTable('product')) {

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
        } else {
            DB::table('product')->truncate();
        }
       
        /*----------  Client Table  ----------*/
        if (!Schema::hasTable('client')) {
        
            Schema::create('client', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->text('description')->nullable();
                $table->string('mainPictureURL')->nullable();
                
                $table->timestamps();
            });
        } else {
            DB::table('client')->truncate();
        }

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
        Schema::drop('client');

    }
}
