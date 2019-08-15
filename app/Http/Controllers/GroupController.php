<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
class GroupController extends Controller
{
    
    
    public function index(Request $request)
    {
        $groups = Group::all();
        return view('groups.index',[
            'groups' => $groups
        ]);
    }
    
    public function addGroup(Request $request)
    {
        return view('groups.add_groups');
    }
    
    public function storeGroup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);
        $group = new Group([
            'name' => $request->name
        ]);
        $group->save();
        return redirect('/groups');
    }
    
    public function updateGroup(Group $group, Request $request)
    {
        return view('groups.update_groups', [
            'group' => $group,
        ]);
    }
}
