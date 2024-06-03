<?php

namespace App\Http\Controllers\Backend\ACL;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\FileUploadTrait;
use App\Http\Requests\StoreUser;
use Illuminate\Http\Request;
use Auth;
use DB;

class UsersController extends Controller
{
    use FileUploadTrait;

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        Gate::authorize('user-profile-show');

        $qUsers = DB::table('users')->leftJoin('roles','users.role_id','=','roles.id')
        ->select('users.*','roles.name as role')->orderBy('users.id', 'desc')->paginate(20);
        $qRoles = DB::table('roles')->orderBy('created_at', 'desc')->get();

        return view('backend.acl.access-control', compact('qUsers','qRoles'));
    }

    protected function store(StoreUser $request)
    {
        Gate::authorize('user-profile-create');

        if(!empty($request->file('filProfile'))){
          $sFilePath = $this->imageUpload($request->file('filProfile'), 70, 69, 'media/profile/');
        }else{
          $sFilePath="";
        }
        
        DB::table('users')->insert([
          'name' => $request->txtName,
          'email' => $request->txtEmail,
          'password' => Hash::make($request->txtPassword),
          'mobile' => $request->txtMobile,
          'role_id' => $request->cmbRole,
          'file_path' => $sFilePath,
          'remember_token' => $request->_token,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $request->session()->flash('alert-warning', 'Admin user created successfully.');
        return redirect('admin-users');
    }


    public function show($id)
    {
        //
    }


    public function edit()
    {
        //
    }


    public function update(StoreUser $request, $id)
    {
        Gate::authorize('user-profile-edit');

        if(!empty($request->file('filProfile'))){
          $sFilePath = "";
          $sFilePath = $this->imageUpload($request->file('filProfile'), 70, 69, 'media/profile/');
        }else{
          $sFilePath = $request->txtOldFilePath;
        }
        
        DB::table('users')->where('id',$id)->update([
          'name' => $request->txtName,
          'mobile' => $request->txtMobile,
          'role_id' => $request->cmbRole,
          'file_path' => $sFilePath,
          'password' => !empty($request->txtPassword)?Hash::make($request->txtPassword):$request->txtOldPassword,
          'remember_token' => $request->_token,
          'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $request->session()->flash('alert-warning', 'Admin user updated successfully.');
        return redirect('admin-users');
    }


    public function destroy(Request $request, $id)
    {
        Gate::authorize('user-profile-delete');

        DB::table('users')->where('id',$id)->delete();
        
        $request->session()->flash('alert-danger', 'Admin user deleted successfully.');
        return redirect('admin-users');
    }
}
