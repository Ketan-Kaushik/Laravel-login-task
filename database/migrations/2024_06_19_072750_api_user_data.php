<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('api_users_data', function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->integer('pincode' , 6)->nullable();
            $table->text('address')->nullable();
            $table->boolean('status')->comment('1:Active , 0:Inactive')->default(1)->nullable();
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
