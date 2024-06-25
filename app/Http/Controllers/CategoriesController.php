<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Categories;
use App\Services\CategoryServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoriesController extends Controller
{
    public function __construct(protected CategoryServices $categoriesServices)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize("viewAny", Categories::class);

        $categories = $this->categoriesServices->list();

        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        Gate::authorize("create", Categories::class);

        $ategory = $this->categoriesServices->store($request);

        return response()->json($ategory);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $category)
    {
        Gate::authorize("view", $category);

        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Categories $category)
    {
        Gate::authorize("update", $category);

        $category = $this->categoriesServices->update($request, $category);

        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        Gate::authorize("delete", $categories);

        $this->categoriesServices->destroy($categories);

        return response()->json(["message" => "Category Delted!"]);

    }
}
