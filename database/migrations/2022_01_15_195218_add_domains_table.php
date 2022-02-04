<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('user_id')->index();
            $table->string('name');
            $table->string('image');
            $table->char('domain_name');
            $table->string('industry')->nullable();
            $table->string('type', 8)->default('DOMAINS');
            $table->integer('price');
            $table->integer('unit_age')->nullable();
            $table->string('status')->nullable();
            $table->string('description')->nullable();
            $table->string('info1')->nullable();
            $table->string('info2')->nullable();
            $table->string('info3')->nullable();
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
        Schema::dropifExists('domains');
    }
}
