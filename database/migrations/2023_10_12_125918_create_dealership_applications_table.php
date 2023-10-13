<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('dealership_applications', static function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_id');
            $table->string('dealer_name');
            $table->string('contact_person');
            $table->decimal('loan_amount');
            $table->integer('loan_term');
            $table->decimal('interest_rate');
            $table->text('reason');
            $table->enum('status', ['new', 'in_progress', 'approved', 'rejected'])->default('new');
            $table->timestamps();

            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealership_applications');
    }
};
