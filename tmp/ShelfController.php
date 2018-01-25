<?php
namespace App\Http\Controllers\Shelf;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shelf\ShelfRequest;
use App\Http\Requests\Shelf\ShelfGetRequest;
use App\Http\Requests\Shelf\ShelfCreateRequest;
use App\Http\Requests\Shelf\ShelfUpdateRequest;
use App\Http\Requests\Shelf\ShelfDeleteRequest;
use App\Repository\Shelf\ShelfRepository;

class ShelfController extends Controller
{

    protected $shelf;

    public function __construct(ShelfRepository $shelf)
    {
        $this->shelf = $shelf;
    }
    public function createShelf(ShelfCreateRequest $request)
    {
        $query = $this->shelf->createData($request->all());
        return response()->json($query); 
    }
    public function getShelfList(ShelfGetRequest $request)
    {
        $query = $this->shelf->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteShelf(ShelfDeleteRequest $request)
    {   
        $query = $this->shelf->delete($request->all());
        return response()->json($query);
    }
    public function updateShelf(ShelfUpdateRequest $request)
    {
        $query = $this->shelf->updateData($request->all());
        return response()->json($query);   
    }

}
