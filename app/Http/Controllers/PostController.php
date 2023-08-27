<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class PostController extends Controller
{
    public function group_index(Group $group) {
        return view('group_index')->with(['groups' => $group->get()]);
    }
    
    public function group_show(Group $group) {
        return view('group_show')->with(['group' => $group]);
    }
}
