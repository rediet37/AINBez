<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Http\Request;

trait StoreImageTrait
{
    public function verifyAndStoreImage(Request $request, $fieldname = 'product_pictures', $product_id = null)
    {

        $request->validate([
            $fieldname => 'required',
            $fieldname . '.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf',
        ]);

        if ($request->hasfile($fieldname)) {
            $imgData = []; // Initialize an empty array to store the image names

            foreach ($request->file($fieldname) as $key => $file) {
                $name = $file->getClientOriginalName();
                $mainPathName = '/img/products/';

                // Check if it is the first image
                if ($key === 0) {
                    $file->move(public_path() . $mainPathName . 'product-' . $product_id . '/' . $name);
                } else {
                    $file->move(public_path() . $mainPathName . 'product-' . $product_id, $name);
                }
                // $file->move(public_path() . $mainPathName . 'product-' . $product_id, $name);
                $imgData[] = $name;
            }

            $fileModal = new Image();
            $fileModal->product_pictures = json_encode($imgData);
            $fileModal->product_id = $product_id;

            $fileModal->save();

            return back()->with('success', 'File has successfully uploaded!');
        }

        return $product_id;

    }
}
