<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();

            $table->string('favicon_name_en')->nullable();
            $table->string('favicon_name_others')->nullable();
            $table->string('marquee_en')->nullable();
            $table->string('marquee_others')->nullable();
            $table->string('favicon')->nullable();
            $table->string('header_logo')->nullable();
            $table->string('footer_logo')->nullable();  
            $table->string('phone_one_en')->nullable(); 
            $table->string('phone_one_others')->nullable(); 
            $table->string('phone_two_en')->nullable(); 
            $table->string('phone_two_others')->nullable(); 
            $table->string('email')->nullable(); 
            $table->string('company_name_en')->nullable(); 
            $table->string('company_name_others')->nullable(); 
            $table->string('company_address_en')->nullable(); 
            $table->string('company_address_others')->nullable(); 
            $table->string('facebook')->nullable(); 
            $table->string('twitter')->nullable(); 
            $table->string('linkedin')->nullable(); 
            $table->string('youtube')->nullable();


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
        Schema::dropIfExists('site_settings');
    }
}
