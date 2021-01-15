<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPostsAddIsApproved extends Migration
{

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->boolean('is_approved')->nullable();
        });
    }


    public function down()
    {
        //
    }
}
