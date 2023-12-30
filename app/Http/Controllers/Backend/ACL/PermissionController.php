<?php

namespace App\Http\Controllers\Backend\ACL;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Permission;
use App\Models\Module;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        Gate::authorize('permission-show');

        $qModules = Module::all();
        $qPermissions = Permission::orderBy('id', 'desc')->paginate(20);
        
        return view('backend.acl.access-control', compact('qModules','qPermissions'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Gate::authorize('permission-create');

        $this->validate($request, [
            'txtName' => 'required|string',
            'cmbModule' => 'required'
        ]);

        $sModuleName = Module::select('name')->where('id',$request->cmbModule)->first();
        
        if($request->txtName == 'index'){$sPermissionName = $sModuleName->name.'- Show';}
        if($request->txtName == 'store'){$sPermissionName = $sModuleName->name.'- Create';}
        if($request->txtName == 'update'){$sPermissionName = $sModuleName->name.'- Edit';}
        if($request->txtName == 'destroy'){$sPermissionName = $sModuleName->name.'- Delete';}

        $qChack = Permission::select('id')->where('name',$sPermissionName)->first();

        if(empty($qChack->id))
        {
            $permission = Permission::create([
                'module_id' => $request->cmbModule,
                'name' => $sPermissionName,
                'comment' => $request->txtName,
                'slug' => Str::slug($sPermissionName),
            ]);

            $request->session()->flash('alert-warning', 'Permission information added successful.');
            return redirect('permission');
        }
        else
        {
            $request->session()->flash('alert-danger', 'Permission information already exists.');
            return redirect('permission');
        }

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        Gate::authorize('permission-edit');

        $this->validate($request, [
            'txtName' => 'required|string',
            'cmbModule' => 'required'
        ]);

        $sModuleName = Module::select('name')->where('id',$request->cmbModule)->first();

        if($request->txtName == 'index'){$sPermissionName = $sModuleName->name.'- Show';}
        if($request->txtName == 'store'){$sPermissionName = $sModuleName->name.'- Create';}
        if($request->txtName == 'update'){$sPermissionName = $sModuleName->name.'- Edit';}
        if($request->txtName == 'destroy'){$sPermissionName = $sModuleName->name.'- Delete';}

        $qChack = Permission::select('name')->where('id',$sPermissionName)->where('id','!=',$id)->first();

        if(empty($qChack->id))
        {
            $permission = Permission::where('id',$id)->update([
                'module_id' => $request->cmbModule,
                'name' => $sPermissionName,
                'comment' => $request->txtName,
                'slug' => Str::slug($sPermissionName),
            ]);

            $request->session()->flash('alert-warning', 'Permission information updated successfully.');
            return redirect('permission');
        }
        else
        {
            $request->session()->flash('alert-danger', 'Permission information already exists.');
            return redirect('permission');
        }

    }


    public function destroy($id)
    {
        //
    }
}
