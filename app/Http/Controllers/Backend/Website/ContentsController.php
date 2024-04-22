<?php

namespace App\Http\Controllers\Backend\Website;

use App\Http\Requests\ContentValidation;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use App\Models\Contents;
use Helper;
use Auth;
use DB;


class ContentsController extends Controller
{
    use FileUploadTrait;

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(Request $request)
    {
        Gate::authorize('content-information-show');

        $qItem = DB::table('contents as cont')
        ->leftJoin('categories as cate', 'cont.cat_id', 'cate.id')
        ->leftJoin('users as createBy', 'cont.created_by', 'createBy.id')
        ->leftJoin('users as updateBy', 'cont.updated_by', 'updateBy.id')
        ->select('cont.id','cont.eng_title','cont.bng_title','cont.created_at',
        'cont.updated_at','cont.small_img_path','cont.publish','cate.cat_name',
        'cate.content_type','createBy.name as createdBy','updateBy.name as updatedBy');
        if(!empty($request->cmbCategory)){$qItem->where('cont.cat_id',$request->cmbCategory);};
        if(!empty($request->txtTitle)){$qItem->where('cont.eng_title','like', '%'.$request->txtTitle.'%');};
        
        $qItems=$qItem->orderBy('cont.id', 'desc')->paginate(10);

        $qCategorys = DB::table('categories as cate')
        ->select('cate.id','cate.cat_name','cate.multiple_items','cate.is_parent','cate.parent_id',
        DB::raw('(SELECT COUNT(contents.id) FROM contents WHERE cat_id=cate.id) as count'))
        ->where('publish',1)->get();

        return view('backend.website.content.content-information', compact('qItems','qCategorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function googleIdUpdate(Request $request, $id)
    {
        $url = "https://drive.google.com/uc?export=view&id=";

        DB::table('contents')->where('id',$id)->update([
            'big_img_path' => $url.$request->txtBigImgUrl,
            'small_img_path' => $url.$request->txtSmallImgUrl,
        ]);

        $request->session()->flash('alert-warning', 'Google Image Id Updated successfully.');
        return redirect('content-information');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContentValidation $request)
    {
        Gate::authorize('content-information-create');

        $sBigFilePath="";
        $sSmallFilePath="";
        $sPdfFilePath ="";
        $iSize = $this->imageSize($request->cmbCatID);

        if(!empty($request->file('fImage'))){
            $sBigFilePath = $this->imageUpload($request->file('fImage'), $iSize->big_img_height,$iSize->big_img_width,'/media/post/big-image/');
            $sSmallFilePath = $this->imageUpload($request->file('fImage'), $iSize->small_img_height,$iSize->small_img_width,'/media/post/small-image/');
        }elseif(!empty($request->file('fPDF'))){
            $sPdfFilePath = $this->fileUpload($request->file('fPDF'),'media');
        }

        DB::table('contents')->insert([
            'cat_id' => $request->cmbCatID,
            'eng_title' => $request->txtEngTitle,
            'bng_title' => $request->txtBngTitle,
            'eng_brief' => $request->txtEngBrief,
            'bng_brief' => $request->txtBngBrief,
            'eng_details' => $request->txtEngDesc,
            'bng_details' => $request->txtBngDesc,
            'video_id' => $request->txtVideoID,
            'total_hits' => 1,
            'cat_url' => $iSize->cat_slug,
            'en_slug' => $request->txtEngSlug,
            'bn_slug' => $request->txtBngSlug,
            'meta_eng_title' => $request->txtEngMetaTitle,
            'meta_bng_title' => $request->txtBngMetaTitle,
            'meta_eng_keyword' => $request->txtEngMetaKeyword,
            'meta_bng_keyword' => $request->txtBngMetaKeyword,
            'meta_eng_desc' => $request->txtEngMetaDescription,
            'meta_bng_desc' => $request->txtBngMetaDescription,
            'publish' => $request->has('chkPublish')?1:0,
            'big_img_path' => $sBigFilePath,
            'small_img_path' => $sSmallFilePath,
            'file_path' => $sPdfFilePath,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
            'remember_token' => $request->_token,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $request->session()->flash('alert-warning', 'Content information created successfully.');
        return redirect('content-information');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Gate::authorize('content-information-show');

        $qCategorys = DB::table('categories')->select('id','cat_name','multiple_items','content_type')->where('id',$id)->first();

        return view('backend.website.content.create-content', compact('qCategorys'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        Gate::authorize('content-information-edit');

        $sItem = DB::table('contents')->where('id',$id)->first();
        $qCategorys = DB::table('categories')->select('id','cat_name','multiple_items','content_type')->where('id',$sItem->cat_id)->first();
        $qCats = DB::table('categories')->select('id','cat_name')->where('is_parent',0)->where('multiple_items',1)->get();

        return view('backend.website.content.edit-content', compact('qCategorys','sItem','qCats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContentValidation $request, $id)
    { 
        Gate::authorize('content-information-edit');
        
        $sBigFilePath="";
        $sSmallFilePath="";
        $sPdfFilePath ="";
        $iSize = $this->imageSize($request->cmbCatID);

        //return $request->file('fImage');
        if(!empty($request->file('fImage'))){
            $sBigFilePath = $this->imageUpload($request->file('fImage'), $iSize->big_img_height,$iSize->big_img_width,'/media/post/big-image/');
            $sSmallFilePath = $this->imageUpload($request->file('fImage'), $iSize->small_img_height,$iSize->small_img_width,'/media/post/small-image/');
        }else{
            $sBigFilePath = $request->fBigImage;
            $sSmallFilePath = $request->fSmallImage;
        }
        if(!empty($request->file('fPDF'))){
            $sPdfFilePath = $this->fileUpload($request->file('fPDF'),'media');
        }else{
            $sPdfFilePath = $request->hPDF;
        }

        //return $sBigFilePath;
        DB::table('contents')->where('id',$id)->update([
            'cat_id' => $request->cmbCatID,
            'eng_title' => $request->txtEngTitle,
            'bng_title' => $request->txtBngTitle,
            'eng_brief' => $request->txtEngBrief,
            'bng_brief' => $request->txtBngBrief,
            'eng_details' => $request->txtEngDesc,
            'bng_details' => $request->txtBngDesc,
            'video_id' => $request->txtVideoID,
            'total_hits' => 1,
            'cat_url' => $iSize->cat_slug,
            'en_slug' => $request->txtEngSlug,
            'bn_slug' => $request->txtBngSlug,
            'meta_eng_title' => $request->txtEngMetaTitle,
            'meta_bng_title' => $request->txtBngMetaTitle,
            'meta_eng_keyword' => $request->txtEngMetaKeyword,
            'meta_bng_keyword' => $request->txtBngMetaKeyword,
            'meta_eng_desc' => $request->txtEngMetaDescription,
            'meta_bng_desc' => $request->txtBngMetaDescription,
            'publish' => $request->has('chkPublish')?1:0,
            'big_img_path' => $sBigFilePath,
            'small_img_path' => $sSmallFilePath,
            'file_path' => $sPdfFilePath,
            'updated_by' => Auth::user()->id,
            'remember_token' => $request->_token,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $request->session()->flash('alert-warning', 'Content information updated successfully.');
        return redirect('content-information');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
