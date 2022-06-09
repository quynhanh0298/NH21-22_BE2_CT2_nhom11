<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manufacture;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Comment;
use App\Models\User;


class MyController extends Controller
{
    // function index(){
    //     $allProtypes = Protype::all();
    //     $allProducts = Product::all();
    //     $allManufactures = Manufacture::all();
        
    //     return view('client.index', compact('allProtypes','allProducts','allManufactures'));
    // }

    function getProductByManu(Request $request, $id){
        $allProtypes = Protype::all();
        $allProducts = Product::where(['type_id' => $id])->orderByDesc('id')->paginate(10);
        $allManufactures = Manufacture::all();
        
        return view('client.shop-grid', compact('allProtypes','allProducts','allManufactures'));
    }
    function index(){
        $allProtypes = Protype::all();
        $allProducts = Product::all();
        $allManufactures = Manufacture::all();
        $pagination = Product::orderBy('feature','desc')->simplePaginate(6);
        $LatestProducts = Product::orderBy('created_at', 'desc')->Limit(3)->get();
        $SaleProducts = Product::orderBy('sale', 'desc')->Limit(3)->get();
        $likeProducts = Product::orderBy('likes', 'desc')->Limit(3)->get();
   
        // $paginationProduct = Product::simplePaginate(4);
        return view('client.index', [
            'allProtypes' => $allProtypes,
            'allProducts' => $allProducts,
            'allManufactures' => $allManufactures,
            'pagination' => $pagination,
            'latestProducts' => $LatestProducts,
            'SaleProducts' => $SaleProducts,
            'likeProducts' => $likeProducts
        ]);
    }
    function product(){
        $allProtypes = Protype::all();
        $allProducts = Product::all();
        $allManufactures = Manufacture::all();
   
        // $paginationProduct = Product::simplePaginate(4);
        return view('client.product', [
            'allProtypes' => $allProtypes,
            'allProducts' => $allProducts,
            'allManufactures' => $allManufactures,
        ]);
    }
    function protype(Request $request){
        $protype_id = Protype::where('id',$request->type_id)->get();
        $allProducts = Product::all();
        $allProtypes = Protype::all();
        return view('client.protype')->with('protype', $protype_id)
                                    ->with('allProducts', $allProducts)
                                    ->with('allProtypes', $allProtypes);
    }
    function productsearch(Request $request)
    {
        $productsearch = Product::where('name', 'LIKE', '%'.$request->keyword.'%')->get();
        $allProtypes = Protype::all();
        $allProducts = Product::all();
         return view('client.productsearch', [
             'productsearch' => $productsearch,
             'allProtype' => $allProtypes,
             'allProducts' => $allProducts
         ]);
    }
    function productsearchajax($keyword){
        $productsearch = Product::where('name', 'LIKE', '%'.$keyword.'%')->Limit(4)->get();
        return $productsearch;
    }
    function productdetails(Request $request){
        $product_Id = Product::where('id',$request->product_id)->get();
        foreach ($product_Id as $value) {
            $type_id = $value->type_id;
        }
        $productRelated = Product::where('type_id',$type_id)->take(4)->get();
        $allProducts = Product::all();
        $allComment = Comment::all();
        return view('client.productDetail', [ 
            'product_Id' => $product_Id,
            'productRelated' => $productRelated,
            'products' => $allProducts,
            'allComment' => $allComment,
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }
  public function like(Request $request)
    {
        $id = $request->productId;
        $product = Product::find($id);
        $currentLikes = $product->likes;
        $currentLikes++;
        $product->likes = $currentLikes;
        $product->save();
        
        return $product;
    }
}
