<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     *  @return void
     * 
     */
    public function up(): void
    {
        Schema::create('product_catagories', function (Blueprint $table) {
            $table->id();
            $table->string('catagory_name',255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     * 
     *  @return void
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('product_catagories');
    }
};
