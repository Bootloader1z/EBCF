<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetProposalsTable extends Migration
{
    public function up()
    {
        Schema::create('budget_proposals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('submitted_by');
            $table->foreign('submitted_by')->references('id')->on('users');
            $table->timestamp('submitted_at')->default(now());
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('budget_proposals');
    }
}
