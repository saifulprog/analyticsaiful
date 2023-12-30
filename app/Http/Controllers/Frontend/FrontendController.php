<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    function index(){
        $dflex=false;
        return view('frontend.index', compact('dflex'));
    }

    function portfolio(){
        $dflex=true;
        return view('frontend.my-work', compact('dflex'));
    }

    function blogs($slug){
        $dflex=true;

        $qItem = DB::table('contents as cont')
        ->leftJoin('categories as cate','cont.cat_id','=','cate.id')
        ->select('cont.eng_title','cont.eng_brief','cont.created_at','cont.en_slug',
        'cont.total_hits','cont.small_img_path','cate.cat_name');
        if(!empty($slug!=='all-post')){$qItem->where('cate.cat_slug',$slug);}
        $qItems = $qItem->where('cont.publish',1)->orderBy('cont.id','desc')->paginate(10);

        $qPopulars = DB::table('contents')->select('eng_title','small_img_path','en_slug')
        ->where('publish',1)->orderBy('total_hits','desc')->get()->take(5);

        $qCategorys = DB::table('categories as cate')
        ->leftJoin('contents as cont','cate.id','=','cont.cat_id')
        ->select('cate.cat_name','cate.cat_slug',DB::raw('count(cont.id) as totalPost'))
        ->where('cate.is_parent',0)->where('cate.publish',1)
        ->groupBy('cate.cat_name','cate.cat_slug')->get();

        $sMeta = DB::table('categories')
        ->select('cat_meta_title','cat_meta_keyword','cat_meta_description');
        if(!empty($slug!=='all-post')){$qItem->where('cat_slug',$slug);}
        else{$sMeta->where('id',1);}
        $sMetaInfo = $sMeta->first();

        return view('frontend.blog', compact('dflex','qItems','qPopulars','qCategorys','sMetaInfo'));
    }

    function blogDetails($slug){
        $dflex=true;

        $sItem = DB::table('contents as cont')
        ->leftJoin('categories as cate','cont.cat_id','=','cate.id')
        ->select('cont.id','cont.eng_title','cont.eng_details','cont.created_at',
        'cont.total_hits','cont.big_img_path','cate.cat_name','cont.meta_eng_title','cont.meta_eng_keyword','cont.meta_eng_desc')
        ->where('cont.en_slug',$slug)->first();

        $qPopulars = DB::table('contents')->select('eng_title','small_img_path','en_slug')
        ->where('publish',1)
        ->orderBy('total_hits','desc')->get()->take(5);

        $qCategorys = DB::table('categories as cate')
        ->leftJoin('contents as cont','cate.id','=','cont.cat_id')
        ->select('cate.cat_name','cate.cat_slug',DB::raw('count(cont.id) as totalPost'))
        ->where('cate.is_parent',0)->where('cate.publish',1)
        ->groupBy('cate.cat_name','cate.cat_slug')->get();

        // View Counter Increment Value 1
        DB::table('contents')->where('id',$sItem->id)->update([
            'total_hits' => DB::raw('total_hits + 1')
        ]);

        return view('frontend.blog-details', compact('dflex','sItem','qPopulars','qCategorys'));
    }

    function contactStore(Request $request)
    {
        $this->validate($request, [
            'txtName' => 'required|max:99',
            'txtEmail' => 'required|email|max:69',
            'txtSubject' => 'required|max:255',
            'txtMessage' => 'required|max:255'
        ]);
        
        if($request->txtCpt1 == $request->txtCpt2)
        {
            DB::table('contact_information')->insert([
                'contact_name' => $request->txtName,
                'contact_email' => $request->txtEmail,
                'contact_subject' => $request->txtSubject,
                'contact_message' => $request->txtMessage,
                'service_type' => $request->cmbServiceType,
                'country_name' => $request->txtLocation,
                'view' => 0,
                'remember_token' => $request->_token,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        }
        
        return redirect('/');
    }
}
