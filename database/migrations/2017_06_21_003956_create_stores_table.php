<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_name', 200);
            $table->text('store_description');
            $table->string('store_subdomain', 200);
            $table->string('store_domain', 200);
            $table->string('store_cnpj', 20);
            $table->string('store_inscricao_estadual', 20);
            $table->string('store_razao_social', 200);
            $table->string('store_telefone', 20);
            $table->string('store_telefone_estra', 20);
            $table->string('store_whatsapp', 20);
            $table->string('store_horario_atendimento', 20);
            $table->string('store_cep', 10);
            $table->string('store_logradouro', 200);
            $table->string('store_numero', 50);
            $table->string('store_complemento', 100);
            $table->string('store_bairro', 150);
            $table->string('store_cidade', 200);
            $table->string('store_uf', 2);
            $table->string('store_seo_title', 200);
            /* DOMAINS */
            $table->string('store_www_subdomain', 200);
            $table->string('store_www_domain', 200);
            /* MAGENTO */
            $table->string('store_mage_website_name', 200);
            $table->string('store_mage_website_code', 200);
            $table->string('store_mage_store_name', 200);
            $table->string('store_mage_store_category', 200);
            $table->string('store_mage_vision_store', 200);
            $table->string('store_mage_vision_name', 200);
            $table->string('store_mage_vision_code', 200);
            $table->string('store_mage_vision_status', 200);
            $table->timestamps();
        });

        Schema::create('store_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id')->unsigned();
            $table->integer('user_id')->unsigned();
            
            $table->foreign('store_id')
                ->references('id')
                ->on('stores')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
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
        Schema::drop('store_user');
        Schema::drop('stores');
    }
}