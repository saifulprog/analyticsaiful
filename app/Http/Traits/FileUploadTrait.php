<?php
  
namespace App\HTTP\Traits;

use App\Http\Requests\ContentFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Image;
  
trait FileUploadTrait {

    //Select Content Image Size
    public function imageSize($iCatID){
        $iSize = Category::select('big_img_width','big_img_height','small_img_width','small_img_height','content_type','cat_slug')->where('id', $iCatID)->first();
        return $iSize;
    }

  
    //Content Image Upload 
    public function imageUpload($fFile, $iHeight, $iWeight, $sDirectory) {
       try{
            $sFileName    = time().'-'.$fFile->getClientOriginalName();
            $fImageResize = Image::make($fFile->getRealPath());
            $fImageResize->resize($iWeight, $iHeight);
            $sFilePath = $sDirectory.$sFileName;
            $fImageResize->save($sDirectory.$sFileName);

            return $sFilePath;
       }catch(\Exception $e){
            return $e->getMessage();
       }
    }


    //Content PDF File Upload
    public function fileUpload($fFile, $sDirectory){
        try{
            $sPdf = $fFile->getClientOriginalExtension();
            $sFileName = pathinfo($fFile->getClientOriginalName(), PATHINFO_FILENAME);
            $sNewFileName = time() .'-'.$sFileName . '.' . $sPdf;
            $sFilePath = $sDirectory.'/upload/'.$sNewFileName;
            $fFile->move($sDirectory.'/upload/', $sNewFileName);

            return $sFilePath;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
  
}