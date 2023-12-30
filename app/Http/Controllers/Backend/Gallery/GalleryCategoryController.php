<?php

namespace App\Http\Controllers\Backend\Gallery;

use App\Http\Requests\GalleryCategoryValidation;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Helper;
use Auth;
use DB;

class GalleryCategoryController extends Controller
{
    use FileUploadTrait;

    public function __construct()
    {
      $this->middleware('auth');
    }


    public function index(Request $request)
    {
        Gate::authorize('gallery-category-show');

        $qItem = DB::table('gallery_categories');
        if(!empty($request->cmbCategory)){$qItem->where('id',$request->cmbCategory);};
        if(!empty($request->txtTitle)){$qItem->where('cat_name','like', '%'.$request->txtTitle.'%');};
        
        $qItems=$qItem->orderBy('id', 'desc')->paginate(10);

        $qParentCategorys = $qItems->where('is_parent',1);
        $qCategorys = $qItems->where('is_parent',0);


        return view('backend.website.category.gallery-category', compact('qParentCategorys','qItems','qCategorys'));
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
    public function store(GalleryCategoryValidation $request)
    {
        Gate::authorize('gallery-category-create');
        
        if(!empty($request->file('fImage'))){
            $sFilePath = $this->imageUpload($request->file('fImage'), 280,300,'media/gallery/');
        }else{
            $sFilePath = "";
        }
        
        DB::table('gallery_categories')->insert([
            'parent_id' => $request->cmbParentID,
            'cat_serial' => $request->txtSerial,
            'cat_name' => $request->txtCatName,
            'cat_slug' => $request->txtSLUG,
            'cat_meta_title' => $request->txtTitle,
            'cat_meta_keyword' => $request->txtKeyword,
            'cat_meta_description' => $request->txtDescription,
            'big_img_width' => $request->txtBigWidth,
            'big_img_height' => $request->txtBigHeight,
            'img_path' => $sFilePath,
            'is_parent' => $request->has('chkIsParent')?1:0,
            'publish' => $request->has('chkPublish')?1:0,
            'type' => $request->cmbContentType,
            'remember_token' => $request->_token,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
  
        $request->session()->flash('alert-warning', 'Category information created successfully.');
        return redirect('gallery-category');
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
    public function update(GalleryCategoryValidation $request, string $id)
    {
        Gate::authorize('gallery-category-edit');
        
        if(!empty($request->file('fImage'))){
            $sFilePath = $this->imageUpload($request->file('fImage'), 280,300,'media/gallery/');
        }else{
            $sFilePath = $request->fImagePath;
        }
        
        DB::table('gallery_categories')->where('id',$id)->update([
            'parent_id' => $request->cmbParentID,
            'cat_serial' => $request->txtSerial,
            'cat_name' => $request->txtCatName,
            'cat_slug' => $request->txtSLUG,
            'cat_meta_title' => $request->txtTitle,
            'cat_meta_keyword' => $request->txtKeyword,
            'cat_meta_description' => $request->txtDescription,
            'big_img_width' => $request->txtBigWidth,
            'big_img_height' => $request->txtBigHeight,
            'img_path' => $sFilePath,
            'is_parent' => $request->has('chkIsParent')?1:0,
            'publish' => $request->has('chkPublish')?1:0,
            'type' => $request->cmbContentType,
            'remember_token' => $request->_token,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
  
        $request->session()->flash('alert-warning', 'Category information updated successfully.');
        return redirect('gallery-category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
