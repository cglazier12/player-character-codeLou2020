<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->id();
            $table->string('player_name');
            $table->string('character_name');
            $table->unsignedInteger('level');
            $table->unsignedInteger('exp');
            $table->string('class');
            $table->string('race');
            $table->string('alignment');
            $table->unsignedInteger('strength');
            $table->unsignedInteger('dexterity');
            $table->unsignedInteger('constitution');
            $table->unsignedInteger('intelligence');
            $table->unsignedInteger('wisdom');
            $table->unsignedInteger('charisma');
            $table->unsignedInteger('proficiency_bonus');
            $table->boolean('acrobatics');
            $table->boolean('animal_handling');
            $table->boolean('arcana');
            $table->boolean('athletics');
            $table->boolean('deception');
            $table->boolean('history');
            $table->boolean('insight');
            $table->boolean('intimidation');
            $table->boolean('investigation');
            $table->boolean('medicine');
            $table->boolean('nature');
            $table->boolean('perception');
            $table->boolean('performance');
            $table->boolean('persuasion');
            $table->boolean('religion');
            $table->boolean('sleight_of_hand');
            $table->boolean('stealth');
            $table->boolean('survival');
            $table->unsignedInteger('armor_class');
            $table->unsignedInteger('initiative');
            $table->unsignedInteger('speed');
            $table->unsignedInteger('hp_max');
            $table->unsignedInteger('hp_current');
            $table->unsignedInteger('hp_temp');
            $table->unique('hit_dice');
            $table->string('personality');
            $table->string('ideals');
            $table->string('bonds');
            $table->string('flaws');
            $table->unsignedInteger('credits');
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
        Schema::dropIfExists('sheets');
    }
}
