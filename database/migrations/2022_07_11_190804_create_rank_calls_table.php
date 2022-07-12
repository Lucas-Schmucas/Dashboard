<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rank_calls', function (Blueprint $table) {
            $table->id('call_id');
            $table->integer('bestseller_rank');
            $table->integer('handbook_rank');
            $table->integer('techbook_rank');
            $table->timestamps();
            $table->index(['call_id', 'created_at']);
            $table->foreignId('book_id')->constrained('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rank_calls');
    }
};
