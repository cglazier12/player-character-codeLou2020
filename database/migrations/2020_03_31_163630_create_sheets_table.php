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
            $table->unsignedInteger('prof_acrobatics');
            $table->unsignedInteger('prof_animal_handling');
            $table->unsignedInteger('prof_arcana');
            $table->unsignedInteger('prof_athletics');
            $table->unsignedInteger('prof_deception');
            $table->unsignedInteger('prof_history');
            $table->unsignedInteger('prof_insight');
            $table->unsignedInteger('prof_intimidation');
            $table->unsignedInteger('prof_investigation');
            $table->unsignedInteger('prof_medicine');
            $table->unsignedInteger('prof_nature');
            $table->unsignedInteger('prof_perception');
            $table->unsignedInteger('prof_performance');
            $table->unsignedInteger('prof_persuasion');
            $table->unsignedInteger('prof_religion');
            $table->unsignedInteger('prof_sleight_of_hand');
            $table->unsignedInteger('prof_stealth');
            $table->unsignedInteger('prof_survival');
            $table->unsignedInteger('armor_class');
            $table->unsignedInteger('initiative');
            $table->unsignedInteger('speed');
            $table->unsignedInteger('hp_max');
            $table->unsignedInteger('hp_current');
            $table->unsignedInteger('hp_temp');
            $table->unsignedInteger('hit_dice');
            $table->unsignedInteger('hit_dice_temp');
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
