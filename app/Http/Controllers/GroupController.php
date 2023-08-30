<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Category;

class GroupController extends Controller
{
    public function index(Group $groups) {
        return view('groups.index')->with(['groups' => $groups->get()]);
    }
    
    public function show(Group $group) {
        return view('groups.show')->with(['group' => $group]);
    }
    
    public function showMygroup(Request $request) {
        return view('groups.myshow')->with(['user' => $request->user()]);
    }
    
    public function create(Category $categories) {
        return view('groups.create')->with(['categories' => $categories->get()]);
    }
    
    public function store(Request $request, Group $group) {
        $input = $request['group'];
        $group->fill($input)->save();
        return redirect('/mygroup/');
    }
}
