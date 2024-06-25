<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Categories;

class CategoryServices extends Controller
{

    public function list()
    {
        $categories = Categories::paginate();

        return $categories;
    }

    public function store(CategoryStoreRequest $request){
        
        $category = Categories::create($request->validated());
        
        return $category;
    }

    public function update(CategoryUpdateRequest $request, Categories $category){
        
        $category->update($request->validated());
        
        return $category;
    }

    public function destroy(Categories $category){
        
        $category->delete();
        
        return $category;
    }
}