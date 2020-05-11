<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use App\User;

class TestsController extends Controller
{
    public function testing()
    {
        $user = User::find(1)->sheet;
        dd($user);
    }

    public function debug()
    {

    }


}
