<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->id();
            $table->string('degree', 30);
            $table->string('institute')->nullable();
            $table->string('year')->nullable();
            $table->string('aggregate')->nullable();
            $table->text('remarks')->nullable();
            $table->Biginteger('job_applications_id')->unsigned();
            $table->timestamps();
            $table->foreign('job_applications_id')->references('id')->on('job_applications')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_details');
    }
}
