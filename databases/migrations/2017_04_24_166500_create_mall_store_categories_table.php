<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-05-09 13:54:48
 */

use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallStoreCategoriesTable.
 */
class CreateMallStoreCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_store_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amount_of_deposit')->default(0);
            $table->tinyInteger('order')->default(0);
            $table->integer('parent_id')->default(0);
            $table->string('name');
            $table->string('flow_marketing')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->drop('mall_store_categories');
    }
}
