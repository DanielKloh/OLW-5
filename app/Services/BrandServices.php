<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandStoreRequest;
use App\Http\Requests\BrandUpdateRequest;
use App\Models\Brand;

class BrandServices extends Controller
{

    public function list()
    {
        $brand = Brand::paginate();

        return $brand;
    }

    public function store(BrandStoreRequest $request){
        
        $brand = Brand::create($request->validated());
        
        return $brand;
    }

    public function update(BrandUpdateRequest $request, Brand $brand){
        
        $brand->update($request->validated());
        
        return $brand;
    }

    public function destroy(Brand $brand){
        
        $brand->delete();
        
        return $brand;
    }
}