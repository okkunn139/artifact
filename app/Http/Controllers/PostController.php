<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function show(Group $group, Post $post) {
        return view('posts.show')->with(['group' => $group, 'post' => $post]);
    }
    
    public function showMypost(Post $post) {
        return view('posts.myshow')->with(['post' => $post]);
    }
    
    public function create() {
        if (Auth::user()->group_id !== NULL) {
            return view('posts.create');
        } else {
            return redirect('/mygroup');
        }
    }
    
    public function store(Request $request, Post $post) {
        $input = $request['post'];
        $group_id = ['group_id' => Auth::user()->group->id];
        $post->fill($group_id)->fill($input)->save();
        return redirect('/mygroup/' . $post->id);
    }
}
