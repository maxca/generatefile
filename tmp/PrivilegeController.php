<?php
namespace App\Http\Controllers\Privilege;

use App\Http\Controllers\Controller;
use App\Http\Requests\Privilege\PrivilegeRequest;
use App\Http\Requests\Privilege\PrivilegeGetRequest;
use App\Http\Requests\Privilege\PrivilegeCreateRequest;
use App\Http\Requests\Privilege\PrivilegeUpdateRequest;
use App\Http\Requests\Privilege\PrivilegeDeleteRequest;
use App\Repository\Privilege\PrivilegeRepository;

class PrivilegeController extends Controller
{

    protected $privilege;

    public function __construct(PrivilegeRepository $privilege)
    {
        $this->privilege = $privilege;
    }
    public function createPrivilege(PrivilegeCreateRequest $request)
    {
        $query = $this->privilege->createData($request->all());
        return response()->json($query); 
    }
    public function getPrivilegeList(PrivilegeGetRequest $request)
    {
        $query = $this->privilege->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deletePrivilege(PrivilegeDeleteRequest $request)
    {   
        $query = $this->privilege->delete($request->all());
        return response()->json($query);
    }
    public function updatePrivilege(PrivilegeUpdateRequest $request)
    {
        $query = $this->privilege->updateData($request->all());
        return response()->json($query);   
    }

}
