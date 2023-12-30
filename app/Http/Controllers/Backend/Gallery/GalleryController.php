<?php

namespace App\Http\Controllers\Backend\Gallery;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Helper;
use Auth;
use DB;

use function Laravel\Prompts\select;

class GalleryController extends Controller
{
    use FileUploadTrait;

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        //Gate::authorize('users-edit');
        // $qItems = DB::table('gallery_categories')->get();
        // $qParentCategorys = $qItems->where('is_parent',1);

        // return view('backend.website.category.gallery-category', compact('qParentCategorys','qItems'));
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
        Gate::authorize('gallery-create'); 

        if($request->hasFile('fImage'))
        {
            $fFiles = $request->file('fImage');

            foreach ($fFiles as $fFile)
            {
                $this->validate($request, [
                    'fImage' => 'required',
                    'fImage.*' => 'image|mimes:jpeg,png,jpg',
                    'cmbCategoryID' => 'required',
                ]);

                $iSize = DB::table('gallery_categories')->where('id', $request->cmbCategoryID)->first();
                $sFilePath = $this->imageUpload($fFile, $iSize->big_img_height,$iSize->big_img_width,'media/gallery/');

                DB::table('gallery')->insert([
                    'cat_id' => $request->cmbCategoryID,
                    'title' => $request->txtTitle,
                    'external_link' => $request->txtExternalLink,
                    'brief' => $request->txtBrief,
                    'img_path' => $sFilePath,
                    'publish' => $request->has('chkPublish')?1:0,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'remember_token' => $request->_token,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            
            }
        }

        $request->session()->flash('alert-success', 'Image is successfully added');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Gate::authorize('gallery-create');

        $qItems =  DB::table('gallery')
        ->leftJoin('gallery_categories as gaca','gallery.cat_id','gaca.id')
        ->select('gallery.*','gaca.cat_name','gaca.type')
        ->where('gallery.cat_id',$id)
        ->orderBy('id', 'desc')->get();

        $sCategory = DB::table('gallery_categories')->where('id',$id)->first();

        return view('backend.website.gallery.show-gallery-image', compact('qItems','id','sCategory'));
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
        //
    }


    public function destroy(string $id)
    {
        Gate::authorize('gallery-delete');

        $query = DB::table('gallery')->where('id',$id);
        $files_to_delete = $query->pluck('img_path')->toArray(); //keeping the result in a php 
        $query->delete(); //now deleting
        unlink($files_to_delete[0]);         
        
        return back()->with('alert-danger', 'Image is successfully deleted');
    }
}
