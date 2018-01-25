<?php
namespace App\Http\Controllers\PrivilegeShelf;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfRequest;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfGetRequest;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfCreateRequest;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfUpdateRequest;
use App\Http\Requests\PrivilegeShelf\PrivilegeShelfDeleteRequest;
use App\Repository\PrivilegeShelf\PrivilegeShelfRepository;

class PrivilegeShelfController extends Controller
{

    protected $privilegeshelf;

    public function __construct(PrivilegeShelfRepository $privilegeshelf)
    {
        $this->privilegeshelf = $privilegeshelf;
    }
    public function createPrivilegeShelf(PrivilegeShelfCreateRequest $request)
    {
        $query = $this->privilegeshelf->createData($request->all());
        return response()->json($query); 
    }
    public function getPrivilegeShelfList(PrivilegeShelfGetRequest $request)
    {
        $query = $this->privilegeshelf->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deletePrivilegeShelf(PrivilegeShelfDeleteRequest $request)
    {   
        $query = $this->privilegeshelf->delete($request->all());
        return response()->json($query);
    }
    public function updatePrivilegeShelf(PrivilegeShelfUpdateRequest $request)
    {
        $query = $this->privilegeshelf->updateData($request->all());
        return response()->json($query);   
    }

}
