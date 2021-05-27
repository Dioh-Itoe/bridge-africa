<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image as Images;
use Image;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with(['author'])->get();
        // $products    = Product::where('id', $id)->first();
        return view('home',compact('products'));
    }

    public function store(Request $req){

        $req->validate([
            'product_name'  => 'required',
            'price'         =>  'required',
            'description'   => 'required',
            'condition'     => 'required',
            'product_image' => 'image|nullable|max:1999'
        ]);
        $product = new Product;
        $arr_url_path = [];

        if($req->file('product_image')) {
            $originalImage  = $req->file('product_image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath  = public_path().'/thumbnail/';
            $originalPath   = public_path().'/uploads/';

            $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

            // $thumbnailImage->resize(200,120);
            $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());
            $arr_url_path = [ \URL::to('/thumbnail/'.time().$originalImage->getClientOriginalName() ),  \URL::to('/uploads/'.time().$originalImage->getClientOriginalName() )];
            $thumbnailImage->destroy();

        }

        // Create product
        $product->product_name = $req->product_name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->author_id = auth()->user()->id;
        $product->condition =   $req->condition;
        $product->on_discount = $req->filled('on_discount') ? 1 : 0;
        $product->is_service = $req->filled('is_service') ? 1 : 0;
        $product->in_stock = $req->filled('in_stock') ? 1 : 0;
        $product->published = $req->filled('published') ? 1 : 0;

        if($product->save()) {
            // $post_images = explode(",", $req->image);
            // foreach($post_images as $image) {
                $image                 = new Images;
                $image->imageable_id   = $product->id;
                $image->imageable_type = 'App\Models\Product';
                $image->product_image      = \json_encode($arr_url_path);
                $image->save();
            // }
        }


        return redirect('/dashboard')->with('success', $req->product_name . ' Created successfully');
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'product_name'  => 'required',
            'price'         =>  'required',
            'description'   => 'required',
            'condition'     => 'required',
            'product_image' => 'image|nullable|max:1999'
        ]);
        $product = Product::where('id', $id)->first();
        $arr_url_path = [];

        if($req->file('product_image')) {
            $originalImage  = $req->file('product_image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath  = public_path().'/thumbnail/';
            $originalPath   = public_path().'/uploads/';

            $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

            // $thumbnailImage->resize(200,120);
            $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());
            $arr_url_path = [ \URL::to('/thumbnail/'.time().$originalImage->getClientOriginalName() ),  \URL::to('/uploads/'.time().$originalImage->getClientOriginalName() )];
            $thumbnailImage->destroy();

                $product_image                 = Images::where('imageable_id', $product->id)->first();

                if(!empty($product_image)) {
                    $product_image->imageable_id   = $product->id;
                    $product_image->imageable_type = 'App\Models\Product';
                    $product_image->product_image        = \json_encode($arr_url_path);
                    $product_image->save();
                } else {
                    $new_product_image = new Images;
                    $new_product_image->imageable_id   = $product->id;
                    $new_product_image->imageable_type = 'App\Models\Product';
                    $new_product_image->product_image        = \json_encode($arr_url_path);
                    $new_product_image->save();
                }

        }

        // Update product
        $product->product_name = $req->product_name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->author_id = auth()->user()->id;
        $product->condition =   $req->condition;
        $product->on_discount = $req->filled('on_discount') ? 1 : 0;
        $product->is_service = $req->filled('is_service') ? 1 : 0;
        $product->in_stock = $req->filled('in_stock') ? 1 : 0;
        $product->published = $req->filled('published') ? 1 : 0;
        $product->save();

        return redirect('/dashboard')->with('success', $product->product_name .' Updated');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->with('danger', $product->product_name . ' deleted!');

    }

}
