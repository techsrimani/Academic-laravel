<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('position', 50);
            $table->string('first_name', 30);
            $table->string('last_name', 20);
            $table->string('photo')->nullable();
            $table->date('dob');
            $table->smallInteger('age');
            $table->enum('sex', ['Male', 'Female', 'Others']);
            $table->string('email');
            $table->string('alt_email');
            $table->bigInteger('phone');
            $table->bigInteger('alt_phone');
            $table->string('father_name', 50)->nullable();
            $table->bigInteger('father_phone')->nullable();
            $table->string('father_occupation', 40)->nullable();
            $table->string('mother_name', 50)->nullable();
            $table->bigInteger('mother_phone')->nullable();
            $table->string('mother_occupation', 40)->nullable();
            $table->string('gaurdian_name', 50)->nullable();
            $table->bigInteger('gaurdian_phone')->nullable();
            $table->string('gaurdian_occupation', 40)->nullable();
            $table->string('address_l1');
            $table->string('address_l2');
            $table->string('city');
            $table->string('state');
            $table->bigInteger('pincode');
            $table->string('country');
            $table->string('present_address_l1');
            $table->string('present_address_l2');
            $table->string('present_city');
            $table->string('present_state');
            $table->bigInteger('present_pincode');
            $table->string('present_country');
            $table->string('employee_status', 20);
            $table->integer('current_ctc');
            $table->integer('expected_ctc');
            $table->smallInteger('experience');
            $table->string('company1');
            $table->date('from1');
            $table->date('to1');
            $table->text('accomplishments1');
            $table->string('role1');
            $table->string('company2')->nullable();
            $table->date('from2')->nullable();
            $table->date('to2')->nullable();
            $table->text('accomplishments2')->nullable();
            $table->string('role2')->nullable();
            $table->string('company3')->nullable();
            $table->date('from3')->nullable();
            $table->date('to3')->nullable();
            $table->text('accomplishments3')->nullable();
            $table->string('role3')->nullable();
            $table->string('company4')->nullable();
            $table->date('from4')->nullable();
            $table->date('to4')->nullable();
            $table->text('accomplishments4')->nullable();
            $table->string('role4')->nullable();
            $table->string('company5')->nullable();
            $table->date('from5')->nullable();
            $table->date('to5')->nullable();
            $table->text('accomplishments5')->nullable();
            $table->string('role5')->nullable();
            $table->string('link1')->nullable();
            $table->string('your_role1')->nullable();
            $table->string('skills1')->nullable();
            $table->smallInteger('contribution1')->nullable();
            $table->string('link2')->nullable();
            $table->string('your_role2')->nullable();
            $table->string('skills2')->nullable();
            $table->smallInteger('contribution2')->nullable();
            $table->string('link3')->nullable();
            $table->string('your_role3')->nullable();
            $table->string('skills3')->nullable();
            $table->smallInteger('contribution3')->nullable();
            $table->string('skill1', 20);
            $table->tinyInteger('eval1');
            $table->string('sremarks1');
            $table->tinyInteger('exp1');
            $table->string('skill2', 20)->nullable();
            $table->tinyInteger('eval2')->nullable();
            $table->string('sremarks2')->nullable();
            $table->tinyInteger('exp2')->nullable();
            $table->string('skill3', 20)->nullable();
            $table->tinyInteger('eval3')->nullable();
            $table->string('sremarks3')->nullable();
            $table->tinyInteger('exp3')->nullable();
            $table->string('skill4', 20)->nullable();
            $table->tinyInteger('eval4')->nullable();
            $table->string('sremarks4')->nullable();
            $table->tinyInteger('exp4')->nullable();
            $table->string('skill5', 20)->nullable();
            $table->tinyInteger('eval5')->nullable();
            $table->string('sremarks5')->nullable();
            $table->tinyInteger('exp5')->nullable();
            $table->string('add_skill1')->nullable();
            $table->string('add_eval1')->nullable();
            $table->string('add_sremarks1')->nullable();
            $table->string('add_exp1')->nullable();
            $table->string('add_skill2')->nullable();
            $table->string('add_eval2')->nullable();
            $table->string('add_sremarks2')->nullable();
            $table->string('add_exp2')->nullable();
            $table->string('add_skill3')->nullable();
            $table->string('add_eval3')->nullable();
            $table->string('add_sremarks3')->nullable();
            $table->string('add_exp3')->nullable();
            $table->string('add_skill4')->nullable();
            $table->string('add_eval4')->nullable();
            $table->string('add_sremarks4')->nullable();
            $table->string('add_exp4')->nullable();
            $table->string('add_skill5')->nullable();
            $table->string('add_eval5')->nullable();
            $table->string('add_sremarks5')->nullable();
            $table->string('add_exp5')->nullable();
            $table->string('ref_name', 30);
            $table->bigInteger('ref_number');
            $table->string('ref_occupation', 30);
            $table->string('ref_relation', 20);
            $table->string('ref_name1', 30);
            $table->bigInteger('ref_number1');
            $table->string('ref_occupation1', 30);
            $table->string('ref_relation1', 20);
            $table->string('ref_name2', 30);
            $table->bigInteger('ref_number2');
            $table->string('ref_occupation2', 30);
            $table->string('ref_relation2', 20);
            $table->string('spl_category')->nullable();
            $table->text('spl_category_details')->nullable();
            $table->date('avl_date');
            $table->string('linkedin');
            $table->string('facebook');









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
        Schema::dropIfExists('job_applications');
    }
}
