<?php

namespace App\Http\Controllers\Backend\ACL;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Module;
use App\Models\Role;
use DB;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        Gate::authorize('role-show');

        $qRoles = Role::all();
        $qModules = Module::all();
        return view('backend.acl.access-control', compact('qRoles','qModules'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Gate::authorize('role-create');

        $this->validate($request, [
            'name' => 'required|unique:roles',
        ]);

        Role::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        $request->session()->flash('alert-warning', 'Roles information added successful.');
        return redirect('roles');
    }


    //Assign Permission by this function
    public function assignPer(Request $request, $id)
    {
        //Gate::authorize('update');

        $qPermissions = DB::table('permission_role')->select('id')->where('role_id',$id)->get();

        foreach($request->permissions as $per )
        {
          //Delete Unchack Permission
          foreach($qPermissions as $sPermission)
          {
            if($sPermission->id!==$per)
            {
              DB::table('permission_role')->where('id',$sPermission->id)->delete();
            }

          }

          //Insert or Update Permission
          DB::table('permission_role')->updateOrInsert
          (
            [
              'role_id' => $id,
              'permission_id' => $per,
            ],
            [
              'permission_id' => $per,
              'role_id' => $id,
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
            ]
          );

        }

        $request->session()->flash('alert-warning', 'Roles permission assigned successfully.');
        return redirect('roles');
    }


    public function edit($id)
    {
        //Gate::authorize('role-edit');

        // $modules = Module::all();
        // $role = DB::table('permission_role')->where('role_id',$id)->get();
        // return view('backend.acl.assign-roles', compact('modules','id','role'));
    }


    public function update(Request $request, $id)
    {
        Gate::authorize('role-edit');
        
        $this->validate($request, [
            'name' => 'required|unique:roles,name,'.$id,
        ]);

        Role::where('id',$id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        $request->session()->flash('alert-warning', 'Roles information updated successful.');
        return redirect('roles');
    }


    public function destroy($id)
    {
        //
    }
}
