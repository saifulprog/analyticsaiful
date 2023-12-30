<?php

namespace App\Http\Controllers\Backend\Website;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Auth;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        Gate::authorize('content-category-show');

        $qQuery = DB::table('categories');
        $qItems = $qQuery->groupBy('id','parent_id')->get();
        $qParentCategorys = $qQuery->where('is_parent',1)->get();

        return view('backend.website.category.content-category', compact('qParentCategorys','qItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        Gate::authorize('content-category-create');
        
        $this->validate($request, [
            'cmbParentID' => 'required|string|max:99',
            'txtTitle' => 'string|max:60|unique:categories,cat_meta_title',
            'txtKeyword' => 'string|max:255',
            'txtDescription' => 'string|max:160',
            'txtSLUG' => 'required|string|max:255'
        ]);
        
        DB::table('categories')->insert([
            'parent_id' => $request->cmbParentID,
            'cat_serial' => $request->txtSerial,
            'cat_name' => $request->txtCatName,
            'cat_slug' => $request->txtSLUG,
            'cat_meta_title' => $request->txtTitle,
            'cat_meta_keyword' => $request->txtKeyword,
            'cat_meta_description' => $request->txtDescription,
            'big_img_width' => $request->txtBigWidth,
            'big_img_height' => $request->txtBigHeight,
            'small_img_width' => $request->txtSmallWidth,
            'small_img_height' => $request->txtSmallHeight,
            'is_parent' => $request->has('chkIsParent')?1:0,
            'multiple_items' => $request->has('chkMultipleItems')?1:0,
            'publish' => $request->has('chkPublish')?1:0,
            'content_type' => $request->cmbContentType,
            'remember_token' => $request->_token,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
  
        $request->session()->flash('alert-warning', 'Category information created successfully.');
        return redirect('content-category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        Gate::authorize('content-category-edit');

        $this->validate($request, [
            'cmbParentID' => 'required|string|max:99',
            'txtTitle' => 'string|max:60|unique:categories,cat_meta_title,'.$id,
            'txtKeyword' => 'string|max:255',
            'txtDescription' => 'string|max:160',
            'txtSLUG' => 'required|string|max:255'
        ]);
        
        DB::table('categories')->where('id',$id)->update([
            'parent_id' => $request->cmbParentID,
            'cat_serial' => $request->txtSerial,
            'cat_name' => $request->txtCatName,
            'cat_slug' => $request->txtSLUG,
            'cat_meta_title' => $request->txtTitle,
            'cat_meta_keyword' => $request->txtKeyword,
            'cat_meta_description' => $request->txtDescription,
            'big_img_width' => $request->txtBigWidth,
            'big_img_height' => $request->txtBigHeight,
            'small_img_width' => $request->txtSmallWidth,
            'small_img_height' => $request->txtSmallHeight,
            'is_parent' => $request->has('chkIsParent')?1:0,
            'multiple_items' => $request->has('chkMultipleItems')?1:0,
            'publish' => $request->has('chkPublish')?1:0,
            'content_type' => $request->cmbContentType,
            'remember_token' => $request->_token,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
  
        $request->session()->flash('alert-warning', 'Category information updated successfully.');
        return redirect('content-category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
