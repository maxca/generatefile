<?php
namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Http\Requests\Category\CategoryGetRequest;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;
use App\Http\Requests\Category\CategoryDeleteRequest;
use App\Repository\Category\CategoryRepository;

class CategoryController extends Controller
{

    protected $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }
    public function createCategory(CategoryCreateRequest $request)
    {
        $query = $this->category->createData($request->all());
        return response()->json($query); 
    }
    public function getCategoryList(CategoryGetRequest $request)
    {
        $query = $this->category->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteCategory(CategoryDeleteRequest $request)
    {   
        $query = $this->category->delete($request->all());
        return response()->json($query);
    }
    public function updateCategory(CategoryUpdateRequest $request)
    {
        $query = $this->category->updateData($request->all());
        return response()->json($query);   
    }

}
