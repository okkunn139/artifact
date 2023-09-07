<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function index(Group $groups) {
        return view('groups.index')->with(['groups' => $groups->get()]);
    }
    
    public function show(Group $group) {
        return view('groups.show')->with(['group' => $group]);
    }
    
    public function showMygroup() {
        return view('groups.myshow')->with(['user' => Auth::user()]);
    }
    
    public function create(Category $categories) {
        if (Auth::user()->group_id === NULL and Auth::user()->role === "団体") {
            return view('groups.create')->with(['categories' => $categories->get()]);
        } else {
            return redirect('/mygroup');
        }
    }
    
    public function store(Request $request, Group $group) {
        $input = $request['group'];
        $group->fill($input)->save();
        $group_id = ['group_id' => $group->id];
        $user = Auth::user();
        $user->fill($group_id)->save();
        return redirect('/mygroup');
    }
    
    public function edit(Category $categories) {
        return view('groups.edit')->with(['categories' => $categories->get(), 'group' => Auth::user()->group]);
    }
    
    public function update(Request $request) {
        $input = $request['group'];
        $user = Auth::user();
        $user->group->fill($input)->save();
        return redirect('/mygroup');
    }
    
    public function delete() {
        return view('groups.delete')->with(['group' => Auth::user()->group]);
    }
    
    public function destroy() {
        $group = Auth::user()->group;
        $group_id = ['group_id' => NULL];
        Auth::user()->fill($group_id)->save();
        $group->posts()->delete();
        $group->delete();
        return redirect('/mygroup');
    }
}
