<?php

namespace App\Http\Controllers;

use App\Sheet;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SheetsController extends Controller
{
    // grab the user's sheet from the database
    public function fetchAbility(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;

        $sheet = Sheet::where('id', $id)->first();

        return response()->json([
            'sheet' => $sheet
        ]);
    }

    public function updateAbility(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;

        Sheet::where('id', $id)
            ->update([
                'strength' => $request->strength,
                'dexterity' => $request->dexterity,
                'constitution' => $request->constitution,
                'intelligence' => $request->intelligence,
                'wisdom' => $request->wisdom,
                'charisma' => $request->charisma,
                'armor_class' => $request->armor_class,
                'initiative' => $request->initiative,
                'speed' => $request->speed,
                'hp_current' => $request->hp_current,
                'hp_temp' => $request->hp_temp,
                'hit_dice' => $request->hit_dice,
                'credits' => $request->hit_dice,
                'personality' => $request->personality,
                'ideals' => $request->ideals,
                'bonds' => $request->bonds,
                'flaws' => $request->flaws,
            ]);
        return response()->json([
            'success'
        ]);
    }

    public function spells(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
    }


}
