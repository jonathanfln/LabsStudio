<?php

namespace App\Services;

use Image;
use Storage;

class ImageResize {

  /**
   * Save images and resize
   * 
   * @param Request->image image send through th form 
   * @return string image name
   */
  public function imageStore($image){
    $imageName = $image['name']->store('',$image["disk"]);
    $resize = Image::make(Storage::disk($image["disk"])->path($imageName))->resize($image['w'],$image['h']);
    $resize->save();
    return $imageName;
  }
}