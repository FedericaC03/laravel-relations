<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_info', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained();
            $table->string("nationality", 40)->nullable();
            $table->text("bio")->nullable();
            $table->string("image")->default("https://i0.wp.com/magazinepragma.com/wp-content/uploads/2019/09/Wile-coyote-4.jpg?resize=460%2C276&ssl=1");
            $table->boolean("alive")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_info');
    }
}
