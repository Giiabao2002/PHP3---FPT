<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách sản phẩm",
            'data' => ProductResource::collection($product)
        ];
        return response()->json($arr, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,['tenSP'=>'required','gia'=>'required']);
        if($validator->fails()){
            $arr = ['success'=>false,
                    'message'=>'Lỗi kiểm tra dữ liệu',
                    'data'=>$validator->errors()
        ];
        return response()->json($arr, 200);
        }
        $product = Product::create($input);
        $arr = ['status'=>true,
                'message'=>"Sản phẩm đã lưu thành công",
    ];
    return response()->json($arr, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if(is_null($product)){
            $arr = [
                'success' => false,
                'message' => 'Không có sản phẩm này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status'=>true,
            'message'=>"Chi tiết sản phẩm",
            'data'=> new ProductResource($product)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        $validator = Validator::make($input, ['tenSP'=>'required','gia'=>'required']);
        if($validator->fails()){
            $arr = ['succes'=>false,
                    'message'=>'Lỗi kiểm tra dữ liệu',
                    'data'=>$validator->errors()  
        ];
        return response()->json($arr, 200);
        }
        $product->tenSP = $input['tenSP'];
        $product->gia = $input['gia'];
        $product->save();
        $arr = [
                'status'=> true,
                'message'=>'Sản phẩm cập nhật thành công',
                'data'=> new ProductResource($product)  
            ];
    return response()->json($arr, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $arr = [
            'status' => true,
            'message' => 'Sản phẩm đã được xóa ',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
