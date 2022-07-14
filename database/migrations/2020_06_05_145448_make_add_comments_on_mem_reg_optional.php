<?php

use Illuminate\Database\Migrations\Migration;

class MakeAddCommentsOnMemRegOptional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE members CHANGE `Additional-Info` `Additional-Info` TEXT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
