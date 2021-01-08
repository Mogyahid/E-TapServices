<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientRequestServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_request_services', function (Blueprint $table) {
            $table->id();
            $table->string("transaction_code");
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("serviceOffer_id");
            $table->unsignedBigInteger("provider_id");
            $table->double("totalAmount");
            $table->string("delivery_address");
            $table->datetime("delivery_date");
            $table->boolean("admin_confirm")->default(0);
            $table->boolean("categoryadmin_confirm")->default(0);
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
        Schema::dropIfExists('client_request_services');
    }
}
