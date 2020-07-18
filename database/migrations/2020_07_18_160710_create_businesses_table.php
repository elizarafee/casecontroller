<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('Pending');
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('deleted_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    /*
    *    To determine if a given model instance has been soft deleted, use the trashed method:
    *    if ($flight->trashed()) {
    *        //
    *    }
    */
    public function down()
    {
        Schema::table('businesses', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
