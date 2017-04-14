<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
use App\Galleryimage;
use Validator;
use Session;


class CreateGalleryImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
         'image_name' => 'alpha_num|required|unique:gallery_images',
         'mobile_image_name' => 'alpha_num|required|unique:gallery_images',
         'is_active' => 'boolean',
         'is_featured' => 'boolean',
         'image' => 'required|mimes:jpeg,jpg,bmp,png,svg|max:4000',
         'mobile_image' => 'required|mimes:jpeg,jpg,bmp,png,svg|max:4000'
     ];
    }
}
