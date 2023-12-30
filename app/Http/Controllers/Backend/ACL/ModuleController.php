<?php

namespace App\Http\Controllers\Backend\ACL;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Module;

class ModuleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        Gate::authorize('module-show');

        $qModules = Module::get();
        return view('backend.acl.access-control', compact('qModules'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Gate::authorize('module-create');

        $this->validate($request, [
            'txtModuleNameEn' => 'required|string|max:69',
        ]);

        $module = Module::create([
            'name' => $request->txtModuleNameEn,
        ]);

        $request->session()->flash('alert-warning', 'New module information added successful.');
        return redirect('modules');
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
        Gate::authorize('module-edit');

        $this->validate($request, [
            'txtModuleNameEn' => 'required|string|max:69',
        ]);

        $module = Module::where('id',$id)->update([
            'name' => $request->txtModuleNameEn,
        ]);

        $request->session()->flash('alert-warning', 'Module information updated successful.');
        return redirect('modules');
    }


    public function destroy($id)
    {
        //
    }
}
