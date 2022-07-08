<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsTermsAndConditionsAggreedToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_terms_and_conditions_aggreed')->default(1);
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('dob')->nullable();
            $table->string('parent_address')->nullable();
            $table->string('parent_apt')->nullable();
            $table->string('parent_city')->nullable();
            $table->string('parent_state')->nullable();
            $table->string('parent_country')->nullable();
            $table->string('parent_zip')->nullable();
            $table->string('phone')->nullable();
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_last_name')->nullable();
            $table->string('child_first_name')->nullable();
            $table->string('child_last_name')->nullable();
            $table->string('child_age')->nullable();
            $table->string('child_address')->nullable();
            $table->string('child_city')->nullable();
            $table->string('child_state')->nullable();
            $table->string('child_country')->nullable();
            $table->string('child_zip')->nullable();
            $table->enum('payment_status',['payment_pending','payment_done'])->default('Payment_pending');
            $table->string( 'paypal_transaction_id')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email')->unique();
            $table->dropColumn('password')->nullable();
            $table->dropColumn('firstname')->nullable();
            $table->dropColumn('lastname')->nullable();
            $table->dropColumn('dob')->nullable();
            $table->dropColumn('parent_address')->nullable();
            $table->dropColumn('parent_apt')->nullable();
            $table->dropColumn('parent_city')->nullable();
            $table->dropColumn('parent_state')->nullable();
            $table->dropColumn('parent_country')->nullable();
            $table->dropColumn('parent_zip')->nullable();
            $table->dropColumn('phone')->nullable();
            $table->dropColumn('spouse_first_name')->nullable();
            $table->dropColumn('spouse_last_name')->nullable();
            $table->dropColumn('child_first_name')->nullable();
            $table->dropColumn('child_last_name')->nullable();
            $table->dropColumn('child_age')->nullable();
            $table->dropColumn('child_address')->nullable();
            $table->dropColumn('child_city')->nullable();
            $table->dropColumn('child_state')->nullable();
            $table->dropColumn('child_country')->nullable();
            $table->dropColumn('child_zip')->nullable();
            $table->dropColumn('payment_status',['payment_pending','payment_done'])->default('Payment_pending');
            $table->dropColumn('is_terms_and_conditions_aggreed');
        });
    }
}
