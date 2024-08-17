<?php

namespace App\Traits;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use App\Models\Webpage;

trait StoreHeroImageTrait
{
    public function verifyAndStoreHeroImage (Request $request, $fieldName = 'slides', $webpageId = 1) {
        $request->validate([
            $fieldName => 'required',
            $fieldName . '.*' => 'mimes:jpeg, jpg, png, gif, csv, pdf',
        ]);

        //$fieldName is a variable that represents the name attribute of the input field in the form that was used to upload the file(s)
        //If multiple files are uploaded with the same field name (e.g., <input type="file" name="images[]" multiple>), $request->file($fieldName) will return an array of files.

        $webpage = Webpage::find($webpageId);
        $existingSlides = $webpage->slides ?: [null, null, null];

        
        if ($request->hasFile($fieldName)) {
            foreach($request->file($fieldName) as $key => $file) {
                if ($file) {
                    $name = $file->getClientOriginalName();
                    $mainPathName = '/images/slides/';
                    $filePath = $mainPathName . 'slide-' . ($key + 1) . '/' . $name;

                    $file->move(public_path() . $mainPathName . 'slide-' . ($key + 1), $name);

                    $existingSlides[$key] = $filePath;
                }
            }

            $webpage->slides = $existingSlides;
            $webpage->save();
        }
        return $existingSlides;
    }
}
