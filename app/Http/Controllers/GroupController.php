<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    function list() {
        return view('oszatylistazas',[
            'diakok' => Group::csoportlista()
        ]);
    }
        function show($id) {
        return view('diakview',[
            'diakid' => Group::csoportlista()[$id]
        ]);
    }
}
