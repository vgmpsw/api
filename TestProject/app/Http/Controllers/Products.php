<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Products extends Controller
{
    public function getProducts() {
        $products = new Product();
        return $products->get();
    }

    public function getProduct($id) {
        $product = new Product();
        return $product->get()->where('id', $id);
    }

    public function addProduct(Request $req) {
        $products = new Product();
        $products->barcode = $req->barcode;
        $products->name = $req->name;
        $products->quantity = $req->quantity;
        $products->description = $req->description;
        $products->save();
        return response('Success', 200);
    }

    public function editProduct($id, Request $req) {
        $product = Product::find($id);
        $product->barcode = $req->barcode;
        $product->name = $req->name;
        $product->quantity = $req->quantity;
        $product->description = $req->description;
        $product->save();
        return response('Success', 200);
    }

    public function deleteProduct($id) {
        $product=Product::where('id',$id)->delete();
        return response('Success', 200);
    }
}